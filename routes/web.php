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

Route::get('/', 'WelcomeController@index');

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/post/delete/{id}', 'PostController@destroy')->name('post.delete');
Route::resource('post', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
