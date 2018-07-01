<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 1/07/18
 * Time: 11:14 PM
 */

Route::group(['prefix' => 'admin'], function(){
    Route::get('/login',function () {
        return "This is log in";
    });

});