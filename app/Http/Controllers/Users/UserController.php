<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\User;

class UserController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('change_premium'); }

    public function index()
    {
        return view('pages/users/list_users', 
        [
            'name' => 'Usuários',
            'users' => User::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        //
    }

    public function change_premium($id)
    {
        $user = User::find($id);
        $user->premium = !$user->premium;
        $user->save();
    }
}
