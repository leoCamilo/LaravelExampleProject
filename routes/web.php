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

Route::get('/', function () { return redirect('login'); });

Route::resource('legaladvice'       , 'Clients\LegalAdviceController');
Route::resource('consultations'     , 'Clients\ConsultationController');
Route::resource('supportcontent'    , 'Academic\SupportContentController');
Route::resource('videolessons'      , 'Academic\VideoLessonsController');
Route::resource('audiolessons'      , 'Academic\AudioLessonController');
Route::resource('projects'          , 'Academic\ProjectsController');
Route::resource('study'             , 'Academic\StudiesController');
Route::resource('category'          , 'Academic\StudyCategoryController');
Route::resource('practical'         , 'Office\PracticalGuideController');
Route::resource('office'            , 'Office\OfficeController');
Route::resource('awards'            , 'Office\AwardController');
Route::resource('roles'             , 'Office\RoleController');
Route::resource('team'              , 'Office\TeamController');
Route::resource('users'             , 'Users\UserController');
Route::resource('news'              , 'News\NewsController');
Route::resource('chat'              , 'Chat\ChatController');

Route::get('change_pass', 'Admin\AdminController@show_change_pass');
Route::get('question/{id}', 'Academic\StudiesController@show_question');

Auth::routes();

Route::match(['get', 'post'], 'register', function() { return redirect('/'); });
Route::post('login', "Auth\LoginController@login");
Route::post('change_pass', "Admin\AdminController@change_pass");