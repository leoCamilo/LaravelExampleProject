<?php

namespace App;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function login(Request $request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'token' => 'hfa91289AHSD!2h1'
        ];
    }

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