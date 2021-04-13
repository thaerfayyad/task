<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'dashboard','middleware'=>'auth:admin'], function (){
        Route::get('/', 'DashboradController@index')->name('dashboard');
        Route::get('logout', 'AdminController@log_out')->name('admin.logout');
        Route::resource('/users', 'UserController');
        Route::resource('/categories', 'CategoryController');
        Route::resource('/products', 'ProductController');

    });
Route::group(['prefix' => 'dashboard','middleware'=>'guest:admin'], function () {

    Route::get('login', 'AdminController@getLogin')->name('admin.get.login');
    Route::post('login', 'AdminController@login')->name('admin.login');
});
