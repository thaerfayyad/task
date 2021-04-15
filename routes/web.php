<?php

use Illuminate\Support\Facades\Route;




Auth::routes(['verify' => true]);

// ->middleware('verified');
////////////////////////////// the Dashboard Routes in admin.php File
/// this Route just for FrontEnd Route
////////////home page routes
Route::name('web.')->group(function (){
    Route::get('/home', 'Site\HomeController@index')->name('home');
    Route::get('/', 'Site\HomeController@index')->name('home');
///////////////////////products routes
    Route::resource('/products','Site\ProductController');
    Route::get('/add-cart/{id}','Site\ProductController@addToCart')->name('add.cart');
    Route::get('/shopping-cart/','Site\ProductController@shoppingCart')->name('shopping.cart');
    Route::get('/shopping-cart/{id}','Site\ProductController@deleteCart')->name('deleteCart');
    Route::get('/checkout/{price}','Site\PaymentController@checkout')->name('checkout');
    Route::post('/charge','Site\PaymentController@charge')->name('charge');

////////////////// attachment routes
    Route::get('/send/{id}','Site\ProductController@send')->name('send.pdf');
    Route::get('/excel/','Site\ProductController@excel')->name('send.excel');
    Route::get('/generate-docx/{id}', 'Site\ProductController@generateDocx')->name('generateDocx');

    ///////////login routes
    Route::get('/sign-in','Site\UserController@get_sign_in')->name('signin');
    Route::post('/sign-in','Site\UserController@userLogin')->name('users.signIn');
    ////////////signup routes
    Route::get('/sign-up','Site\UserController@get_sign_up')->name('get.users.signup');
    Route::post('/store','Site\UserController@sign_up')->name('signup');
    Route::get('logout', 'Site\UserController@log_out')->name('user.logout');
});
