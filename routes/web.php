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