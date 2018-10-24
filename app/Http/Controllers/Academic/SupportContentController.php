<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\SupportContent;

class SupportContentController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'get_all'); }
    
    public function index()
    {
        return view('pages/academic/list_support_content', 
        [
            'name' => 'Material de apoio',
            'support_content' => SupportContent::all()
        ]);
    }

    public function get_all()
    {
        return response()->json(SupportContent::all());
    }

    public function create()
    {
        return view('pages/academic/create_support_content', [ 'name' => 'Material de apoio' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 'title' => 'required|max:300', 'type' => 'required', 'premium' => 'sometimes' ]);

        if ($request->hasFile('attachment'))
        {
            $att = $request->file('attachment');
            $name = time().'_1.'.$att->getClientOriginalExtension();
            $att->move(public_path('/files/support_content'), $name);
            $data['link'] = '/files/support_content/'.$name;

            tap(new SupportContent($data))->save();
        }

        return redirect('supportcontent');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $support = SupportContent::find($id);
        $file = $support->link;
        $path = public_path('/files/support_content').'/'.str_replace("/files/support_content/", "", $file);

        if (file_exists($path))
        {
            @unlink($path);
            $support->delete();
        }

        return response()->json([ 'success' => 'true' ]);
    }
}
