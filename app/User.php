<?php

namespace App;

use Validator;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable     = [ 'name', 'email', 'password' ];
    protected $hidden       = [ 'password' ];

    public function getJWTIdentifier() { return $this->getKey(); }
    public function getJWTCustomClaims() { return [ 'command' => 'command code', 'data' => 'your data here' ]; }

    public static function register(Request $request)
    {
        $payload = [ 'validation_error' => 0, 'sql_error' => 0, 'data' => NULL ];

        try
        {
            $validator = Validator::make($request->all(),
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6'
            ]);
    
            if ($validator->fails())
            {
                $payload['validation_error'] = $validator->errors();
            }
            else
            {
                $payload['data'] = User::create($validator->validate());
            }
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            $payload['sql_error'] = $e->errorInfo[1];           // 1062 - duplicate entry
        }

        return $payload;
    }

    public static function update_info(Request $request)
    {
        return 'update_user not implemented';
    }

    public static function update_pass(Request $request)
    {
        return 'update_pass not implemented';
    }
}