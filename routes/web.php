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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',  [
    'uses' => 'AnnouncementController@index',
    'as' => 'announcement.index'
]);

Route::get('/announcement/create',  [
    'uses' => 'AnnouncementController@create',
    'as' => 'announcement.create'
]);

Route::post('/announcement/create',  [
    'uses' => 'AnnouncementController@store',
    'as' => 'announcement.create'
]);

Route::get('/announcement/{id}',  [
    'uses' => 'AnnouncementController@show',
    'as' => 'announcement.view'
]);

Route::post('/comment',  [
    'uses' => 'CommentController@store',
    'as' => 'comment.create'
]);




Auth::routes();

