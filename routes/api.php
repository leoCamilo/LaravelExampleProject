<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\User;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', function (Request $request) { return response()->json(User::register($request)); });

Route::group(['middleware' => 'api', 'prefix' => 'auth' ], function ($router)
{
    Route::post('login',        'Auth\JwtController@login');
    Route::post('logout',       'Auth\JwtController@logout');
    Route::post('refresh',      'Auth\JwtController@refresh');
    Route::post('me',           'Auth\JwtController@me');
    Route::post('changePass',   'Auth\JwtController@change_pass');
});