<?php

namespace App\Domain;

use Validator;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable     = [ 'name', 'email', 'password' ];
    protected $hidden       = [ 'password' ];

    public function getJWTIdentifier() { return $this->getKey(); }
    public function getJWTCustomClaims() { return []; }

    public function messages()
    {
        return $this->hasMany(Message::class);
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
                $data = $validator->validate();
                $payload['data'] = User::create(
                [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),    // SHOULD BE ADDED ON CLIENT
                ]);
            }
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            $payload['sql_error'] = $e->errorInfo[1];           // 1062 - duplicate entry
        }

        return $payload;
    }

    public static function update_info()
    {
        return 'update_user not implemented';
    }

    public static function update_pass(User $current_user, $passwords)
    {
        if (Hash::check($passwords['old'], $current_user->password))
        {
            $validator = Validator::make([ 'password' => $passwords['new'] ], [ 'password' => 'required|string|min:6' ]);
            $current_user->password = Hash::make($passwords['new']);
            $current_user->save();

            return response()->json(['error' => 0], 200);
        }
        
        return response()->json(['error' => 1], 401);
    }
}