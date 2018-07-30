<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Role;

class RoleController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'get_all'); }

    public function index()
    {
        return view('pages/office/list_roles', 
        [
            'name' => 'Atuação',
            'roles' => Role::all()
        ]);
    }

    public function get_all()
    {
        return response()->json(Role::all());
    }

    public function create()
    {
        return view('pages/office/create_role', [ 'name' => 'Atuação' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 'name' => 'required|max:255', 'content' => 'required' ]);
        tap(new Role($data))->save();
        return redirect('roles');
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
        $role = Role::find($id);
        $role->delete();

        return response()->json([ 'success' => 'true' ]);
    }
}
