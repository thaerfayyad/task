<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function (){
        Route::get('/', 'DashboradController@index')->name('index');
        Route::resource('/users', 'UserController');
        Route::resource('/categories', 'CategoryController');
        Route::resource('/products', 'ProductController');

    });

//->middleware(['auth'])
