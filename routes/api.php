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

use App\Domain\User;

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

Route::post('chat/send',   'Chat\ChatController@store');

Route::get('news/{page}', "News\NewsController@getAllNews");

Route::put('news/change_visibility/{id}'            , "News\NewsController@change_visibility");
Route::put('videolessons/change_visibility/{id}'    , "Academic\VideoLessonsController@change_visibility");
Route::put('users/change_premium/{id}'              , "Users\UserController@change_premium");

Route::delete('news/{id}'           , "News\NewsController@destroy");
Route::delete('roles/{id}'          , "Office\RoleController@destroy");
Route::delete('awards/{id}'         , "Office\AwardController@destroy");
Route::delete('legaladvice/{id}'    , "Clients\LegalAdviceController@destroy");
Route::delete('consultations/{id}'  , "Clients\ConsultationController@destroy");
Route::delete('supportcontent/{id}' , "Academic\SupportContentController@destroy");
Route::delete('videolessons/{id}'   , "Academic\VideoLessonsController@destroy");