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

/* PAGE ROUTES */

Route::get('/', 'IndexController@showIndex')->name('index');

Route::get('/products', 'ProductsController@showProducts')->name('products');
 
Route::post('/register/review', 'PostController@storeRegister')->name('storeRegister');
Route::get('/register/review', 'PostController@goRegister')->name('goRegister');
Route::get('/register', 'RegisterController@showRegister')->name('showRegister');
    Route::get('regencies/get/{id}', 'RegisterController@regencies');
    Route::get('/districts/get/{id}', 'RegisterController@districts');
    Route::get('/json-villages', 'RegisterController@villages');
Route::get('/faq', 'IndexController@showFaq')->name('faq');
Route::get('/register/complete', 'PostController@doneRegister')->name('doneRegister');

/* END PAGE ROUTES */

Route::get('/clear-cache', function() {
    $exitCode = 
    Artisan::call('config:clear');
    $exitCode = 
    Artisan::call('cache:clear');
    $exitCode = 
    Artisan::call('config:cache');
    return 'Cache cleared!';
});