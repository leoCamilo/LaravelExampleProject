<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Projects;

class ProjectsController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'get_by_type'); }
    
    public function index()
    {
        return view('pages/academic/list_projects', 
        [
            'name' => 'Projetos',
            'projects' => Projects::all()
        ]);
    }

    public function get_by_type($type)
    {
        return response()->json(Projects::where('id', '=', $type)->get());
    }

    public function create()
    {
        return view('pages/academic/create_project', [ 'name' => 'Projetos' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:300',
            'type' => 'required',
            'about' => 'required'
        ]);

        if ($request->hasFile('attachment1'))
        {
            $att = $request->file('attachment1');
            $name = time().'_1.'.$att->getClientOriginalExtension();
            $att->move(public_path('/files/projects'), $name);
            $data['attachment1'] = '/files/projects/'.$name;

        } else { $data['attachment1'] = ''; }

        if ($request->hasFile('attachment2'))
        {
            $att = $request->file('attachment2');
            $name = time().'_1.'.$att->getClientOriginalExtension();
            $att->move(public_path('/files/projects'), $name);
            $data['attachment2'] = '/files/projects/'.$name;

        } else { $data['attachment2'] = ''; }

        if ($request->hasFile('attachment3'))
        {
            $att = $request->file('attachment3');
            $name = time().'_1.'.$att->getClientOriginalExtension();
            $att->move(public_path('/files/projects'), $name);
            $data['attachment3'] = '/files/projects/'.$name;

        } else { $data['attachment3'] = ''; }

        tap(new Projects($data))->save();
        return redirect('projects');
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
        $proj = Projects::find($id);
        
        $path1 = public_path('/files/projects').'/'.str_replace("/files/projects/", "", $proj->attachment1);
        $path2 = public_path('/files/projects').'/'.str_replace("/files/projects/", "", $proj->attachment2);
        $path3 = public_path('/files/projects').'/'.str_replace("/files/projects/", "", $proj->attachment3);

        if (file_exists($path1)) @unlink($path1);
        if (file_exists($path2)) @unlink($path2);
        if (file_exists($path3)) @unlink($path3);

        $proj->delete();
        return response()->json([ 'success' => 'true' ]);
    }
}