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

// Route::get('user/login', function (Request $request)
// {
//     // test stuff here...
//     // var_dump($request);

//     return response()->json(User::login($request));
// });

// Route::post('user/login', function (Request $request) { return response()->json(User::login($request)); });
Route::post('user/register', function (Request $request) { return response()->json(User::register($request)); });

Route::post('user/login', function (Request $request) 
{

});
