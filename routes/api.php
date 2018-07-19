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

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth' ], function ($router)
{
    Route::post('login',        'Auth\JwtController@login');
    Route::post('logout',       'Auth\JwtController@logout');
    Route::post('refresh',      'Auth\JwtController@refresh');
    Route::post('me',           'Auth\JwtController@me');
    Route::post('changePass',   'Auth\JwtController@change_pass');
});

// TODO: see needed of cors middleware here

// Route::group(['middleware' => 'cors' ], function ($router)
// {
// });

// ====================================================================================================

Route::get('academic/get_projects/{id}' , "Academic\ProjectsController@get_by_type");
Route::get('academic/study/{id}'        , "Academic\StudiesController@get_all");
Route::get('academic/content'           , "Academic\SupportContentController@get_all");
Route::get('videos/all'                 , "Academic\VideoLessonsController@getAllVideos");
Route::get('news/{page}'                , "News\NewsController@getAllNews");
Route::get('office/get_info'            , "Office\OfficeController@get_office_description");
Route::get('office/get_team'            , "Office\TeamController@get_team_description");
Route::get('office/get_role'            , "Office\RoleController@get_all");
Route::get('office/get_awards'          , "Office\AwardController@get_all");
Route::get('client/get_docs/{id}'       , "Clients\LegalAdviceController@get_data_by_id");
Route::get('client/get_links'           , "Clients\ConsultationController@get_all");
Route::get('chat/get_by_user/{id}'      , "Chat\ChatController@get_user_msg");

Route::post('chat/send'                 , 'Chat\ChatController@store');
Route::post('auth/register'             , function (Request $request) { return response()->json(User::register($request)); });

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
Route::delete('projects/{id}'       , "Academic\ProjectsController@destroy");
Route::delete('study/{id}'          , "Academic\StudiesController@destroy");