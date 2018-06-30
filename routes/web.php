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

//User section

//register page
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
//register behaviour
Route::post('/register', '\App\Http\Controllers\RegisterController@register');

//login page
Route::get('/login', '\App\Http\Controllers\LoginController@index');
//login behaviour
Route::post('/login', '\App\Http\Controllers\LoginController@login');
//logout behaviour
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');

//personal setting page
Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
//personal setting operation
Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore ');




//Article section
Route::get('/', 'PostController@index');

//The page of articles list
Route::get('/posts', 'PostController@index');

//The page of creating a article
Route::get('/posts/create', 'PostController@create');

//The page of a article
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');

Route::post('/posts', '\App\Http\Controllers\PostController@store');

//The page of editing a article
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');

//The page of deleting articles
Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');

//Upload images
Route::post('/posts/img/upload','\App\Http\Controllers\PostController@imageUpload');

//Submit comment
Route::post('/posts/{post}/comment','\App\Http\Controllers\PostController@comment');

//Like and unlike
Route::get('/posts/{post}/like','\App\Http\Controllers\PostController@like');
Route::get('/posts/{post}/unlike','\App\Http\Controllers\PostController@unlike');


// Personal center
Route::get('/user/{user}', '\App\Http\Controllers\UserController@show');
Route::post('/user/{user}/fan', '\App\Http\Controllers\UserController@fan');
Route::post('/user/{user}/unfan', '\App\Http\Controllers\UserController@unfan');

//topic page
Route::get('/topic/{topic}', '\App\Http\Controllers\TopicController@show');
//publish articles
Route::post('/topic/{topic}/submit', '\App\Http\Controllers\TopicController@submit');
