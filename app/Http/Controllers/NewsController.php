<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/news/create_news', [ 'name' => 'Novidades' ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages/news/detail_news', [ 'news' => News::find($id), 'name' => 'Novidades' ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return response()->json([ 'success' => 'true' ]);
    }
}
