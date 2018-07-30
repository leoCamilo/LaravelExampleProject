<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\PracticalGuide;

class PracticalGuideController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'get_all'); }

    public function index()
    {
        return view('pages/office/list_practical_guide', 
        [
            'name' => 'Guias Práticos',
            'practical_guides' => PracticalGuide::all()
        ]);
    }

    public function create()
    {
        return view('pages/office/create_practical_guide', [ 'name' => 'Guias Práticos' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 'title' => 'required|max:300' ]);

        if ($request->hasFile('attachment'))
        {
            $att = $request->file('attachment');
            $name = time().'_1.'.$att->getClientOriginalExtension();
            $att->move(public_path('/files/practical_guides'), $name);
            $data['link'] = '/files/practical_guides/'.$name;

            tap(new PracticalGuide($data))->save();
        }

        return redirect('practical');
    }

    public function destroy($id)
    {
        $practical = PracticalGuide::find($id);
        $file = $practical->link;
        $path = public_path('/files/practical_guides').'/'.str_replace("/files/practical_guides/", "", $file);

        if (file_exists($path))
        {
            @unlink($path);
            $practical->delete();
        }

        return response()->json([ 'success' => 'true' ]);
    }
}
