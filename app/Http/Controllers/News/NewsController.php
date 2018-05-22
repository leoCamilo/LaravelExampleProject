<?php

namespace App\Http\Controllers\News;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages/news/list_news', 
        [
            'name' => 'Novidades',
            'news' => News::all()
        ]);
    }

    public function getAllNews($page)
    {
        return response()->json(DB::table('news')
            ->orderBy('created_at', 'desc')
            ->skip($page * 10)
            ->take(10)
            ->get()
        );
    }

    public function create()
    {
        return view('pages/news/create_news', [ 'name' => 'Novidades' ]);
    }

    public function store(Request $request) // improve validation
    {
        // $data = $request->validate([
        //     'news_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        if ($request->hasFile('news_img'))
        {
            $image = $request->file('news_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/posts');
            $image->move($destinationPath, $name);
            
            $data = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
            ]);
        
            $data['img_url'] = "/img/posts/".$name;

            tap(new News($data))->save();
            return redirect('news');
        }
    }

    public function show($id)
    {
        return view('pages/news/detail_news', [ 'news' => News::find($id), 'name' => 'Novidades' ]);
    }

    public function edit($id) { }

    public function update(Request $request, $id) { }

    public function destroy($id)
    {
        $news = News::find($id);
        $image = $news->img_url;
        $path = public_path('/img/posts').'/'.str_replace("/img/posts/", "", $image);

        if (file_exists($path))
        {
            @unlink($path);
            $news->delete();
        }

        return response()->json([ 'success' => 'true' ]);
    }

    public function change_visibility($id)
    {
        $news = News::find($id);
        $news->visible = !$news->visible;
        $news->save();
    }
}