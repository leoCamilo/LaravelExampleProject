<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Domain\User;

class JwtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'forget']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials))
            return response()->json(['error' => 'unauthorized'], 401);

        // return $this->respondWithToken($token);
        return response()->json(auth()->user());
    }

    public function me() { return response()->json(auth()->user()); }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'successfully logged out']);
    }

    public function refresh() { return $this->respondWithToken(auth()->refresh()); }

    protected function respondWithToken($token)
    {
        return response()->json(
        [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 10         // time in minutes
        ]);
    }

    public function change_pass()
    {
        $data = auth()->payload()->toArray();

        if (isset($data['old_pass']) && isset($data['new_pass']))
            return User::update_pass(auth()->user(), ['old' => $data['old_pass'], 'new' => $data['new_pass']]);
        
        return response()->json(['error' => 'wrong operation'], 401);
    }

    public function forget()
    {
        User::reset_pass(request(['email']));
        return response()->json(['error' => 'ok'], 200);
    }
}