<?php

use Illuminate\Support\Facades\Route;




Auth::routes(['verify' => true]);

// ->middleware('verified');

Route::get('/home', 'Site\HomeController@index')->name('home');
Route::get('/', 'Site\HomeController@index')->name('home');


Route::resource('/products','Site\ProductController');
Route::get('/sign-in','Site\UserController@get_sign_in')->name('signin');
Route::post('/sign-in','Site\UserController@userLogin')->name('users.signIn');
Route::get('/sign-up','Site\UserController@get_sign_up')->name('get.users.signup');
Route::post('/store','Site\UserController@sign_up')->name('signup');
