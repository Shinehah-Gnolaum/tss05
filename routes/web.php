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

Route::get('/', 'BaseController@show')->name('base');

Route::get('/about', 'AboutController@show')->name('about');

Route::get('/apps', 'AppsController@show')->name('apps');

Route::get('/contact', 'ContactController@show')->name('getContact');

Route::post('/contact', 'ContactController@create')->name('postContact');

Route::get('/posts', 'PostController@index')->name('posts');

Route::get('/posts/create', 'PostController@create')->name('createPost');

Route::post('/posts/store', 'PostController@store')->name('storePost');

Route::get('/posts/{post}', 'PostController@show')->name('showPost');

Route::post('/posts/{post}/comment', 'CommentController@store')->name('storeComment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
