<?php

namespace App\Domain;

use Validator;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Domain\MessageCenter;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable     = [ 'name', 'email', 'password' ];
    protected $hidden       = [ 'password' ];

    public function getJWTIdentifier() { return $this->getKey(); }
    public function getJWTCustomClaims() { return []; }

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

                MessageCenter::create([ 'user_id' => $payload['data']->id ]);
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

    public static function reset_pass($email)
    {
        $user = User::where('email', $email)->first();
        $pass = uniqid();
        $user->password = Hash::make($pass);

        // SEND EMAIL WITH NEW TEMPORARY PASS

        $user->save();
    }

    public static function update_data($id, $email, $new_pass)
    {
        $user = User::find($id);
        $user->password = Hash::make($new_pass);
        $user->email = $email;
        $user->save();
    }
}