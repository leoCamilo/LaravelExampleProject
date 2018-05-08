<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/login', function (Request $request){
    $data = User::login($request);

    // add view and other stuffs to show

    return $data;
});

Route::get('/test', function () 
{
    return view('pages/test');
});