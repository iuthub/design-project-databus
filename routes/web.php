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

Route::get('/announcement',  [
    'uses' => 'AnnouncementController@create',
    'as' => 'announcement.create'
]);

Route::post('/announcement',  [
    'uses' => 'AnnouncementController@store',
    'as' => 'announcement.create'
]);

Route::patch('/announcement',  [
    'uses' => 'AnnouncementController@edit',
    'as' => 'announcement.edit'
]);

Route::get('/announcement/{id}/like',  [
    'uses' => 'AnnouncementController@rate',
    'as' => 'announcement.like'
]);

Route::get('/announcement/{id}',  [
    'uses' => 'AnnouncementController@show',
    'as' => 'announcement.view'
]);

Route::post('/comment',  [
    'uses' => 'CommentController@store',
    'as' => 'comment.create'
]);

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();
