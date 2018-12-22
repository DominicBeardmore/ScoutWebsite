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

Route::get('/home', function () {
    return view('post');
})->middleware([ 'auth','isAuthorized' ]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::resource('posts', 'PostsController')->middleware([ 'auth','isAuthorized' ]);
Route::Resource('authorize', 'UserManagmentController')->middleware([ 'auth','isAuthorized' ]);
