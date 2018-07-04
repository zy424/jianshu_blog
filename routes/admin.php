<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 1/07/18
 * Time: 11:14 PM
 */

Route::group(['prefix' => 'admin'], function(){
    //login show page
    Route::get('/login','\App\Admin\Controllers\LoginController@index');

    //login action
    Route::post('/login','\App\Admin\Controllers\LoginController@login');

    //logout action
    Route::get('/logout','\App\Admin\Controllers\LoginController@logout');

    Route::group(['middleware' => 'auth:admin'], function(){
        //first page
        Route::get('/home','\App\Admin\Controllers\HomeController@index');
        //user section
        Route::get('/users','\App\Admin\Controllers\UserController@index');
        Route::get('/users/create','\App\Admin\Controllers\UserController@create');
        Route::post('/users/store','\App\Admin\Controllers\UserController@store');

    });
});