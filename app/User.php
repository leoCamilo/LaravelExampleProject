<?php

namespace App;

use Illuminate\Support\Facades\Request;
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

    public static function login(Request $request){
        return 'function not implemented';
    }

    public static function register(Request $request)
    {
        return 'register_user not implemented';
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