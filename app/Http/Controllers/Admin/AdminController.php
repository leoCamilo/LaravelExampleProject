<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Domain\User;

class AdminController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('show_forget_page', 'change_user_pass'); }

    public function show_change_pass() {
        return view('pages/management/change_pass', [
            'name' => 'Trocar a Senha'
        ]);
    }

	public function show_forget_page($email, $token) {
		return view('auth/passwords/reset', [
			'token' => $token,
			'email' => $email
		]);
	}

	public function change_user_pass(Request $request) {
		$data = $request->validate ([
            'token'  => 'required',
            'email'  => 'required',
            'pass1' => 'required',
			'pass2' => 'required'
        ]);

		$user = User::where('email', $data['email'])->first();

		if ($user != null && $user->remember_token == $data['token'] && $data['pass1'] == $data['pass2']) {
			$user->password = Hash::make($data['pass1']);
			$user->save();

			return "finish";	// TODO: uma pagina de concluido bonitinha
		}

		return "try again";
	}

	public function change_pass(Request $request) {
        $data = $request->validate ([
            'oldPass'  => 'required',
            'newPass'  => 'required',
            'newPass2' => 'required'
        ]);

        if (Auth::attempt(['email' => 'admin', 'password' => $data['oldPass']]) && $data['newPass'] == $data['newPass2']) {
            $user = User::find(1);
            $user->password = Hash::make($data['newPass']);
            $user->save();
            Auth::logout();
            return redirect('login');
        }
    }
}
