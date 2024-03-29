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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');

Route::get('add_camera', 'CameraController@create')->name('add_camera');
Route::resource('cameras', 'CameraController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
Route::resource('allcamera', 'AllcameraController');

Route::get('/test', function () {
    return view('test');
});

Route::get('/playback', 'PlayBackController@index');
Route::post('/download', 'PlayBackController@download_file');
Route::post('/play','PlayBackController@playback');
Route::post('/query','PlayBackController@query');
