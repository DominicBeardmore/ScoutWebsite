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

//NEED TO BE LOGGED IN AND AUTHORIZED
Route::group(['middleware' => ['auth','isAuthorized']], function () {
    Route::get('/home', 'PostsController@index');
    Route::resource('posts', 'PostsController');
    Route::Resource('authorize', 'UserManagmentController');
    Route::resource('/timeline', 'EventsController');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();
