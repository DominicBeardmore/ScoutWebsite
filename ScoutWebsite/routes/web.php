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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::view('/about', 'about');
Route::view('home', 'splashscreen');
Route::view('403', 'errorPage');
Auth::routes();

//NEED TO BE LOGGED IN AND AUTHORIZED
Route::group(['middleware' => ['auth','isAuthorized']], function () {
    Route::resource('posts', 'PostsController');
    Route::resource('authorize', 'UserManagmentController');
    Route::resource('timeline', 'EventsController');
    Route::get('gallery/{id}', 'PostsController@show');
});
