<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Award;

class AwardController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy'); }

    public function index()
    {
        return view('pages/office/list_awards', 
        [
            'name' => 'Prêmios',
            'awards' => Award::all()
        ]);
    }

    public function create()
    {
        return view('pages/office/create_award', [ 'name' => 'Prêmios' ]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('award_img'))
        {
            $image = $request->file('award_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/awards');
            $image->move($destinationPath, $name);
            
            $data = $request->validate([
                'title' => 'required|max:255'
            ]);
        
            $data['img_url'] = "/img/awards/".$name;

            tap(new Award($data))->save();
            return redirect('awards');
        }
    }

    public function destroy($id)
    {
        $award = Award::find($id);
        $image = $award->img_url;
        $path = public_path('/img/awards').'/'.str_replace("/img/awards/", "", $image);

        if (file_exists($path))
        {
            @unlink($path);
            $award->delete();
        }

        return response()->json([ 'success' => 'true' ]);
    }
}
