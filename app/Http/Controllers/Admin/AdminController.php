<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Domain\User;

class AdminController extends Controller
{
    public function __construct() { $this->middleware('auth'); }

    public function show_change_pass() {
        return view('pages/management/change_pass', [
            'name' => 'Trocar a Senha'
        ]);
    }

    public function change_pass(Request $request){
        $data = $request->validate ([
            'oldPass'  => 'required',
            'newPass'  => 'required',
            'newPass2' => 'required'
        ]);

        if (Auth::attempt(['email' => 'AndreGomesAdmin', 'password' => $data['oldPass']]) && $data['newPass'] == $data['newPass2']) {
            $user = User::find(1);
            $user->password = Hash::make($data['newPass']);
            $user->save();
            Auth::logout();
            return redirect('login');
        }
    }
}
