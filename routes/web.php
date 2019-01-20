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

Route::get('/', 'HomeController@index')->name('client.index');

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/blog', function () {
    return view('client.blog');
});

Route::group(['prefix' => 'product'], function (){
    Route::get('/', function (){
        return view('client.product');
    });

    Route::get('/product-detail', function () {
        return view('client.product-detail');
    });
});

//đăng nhâoj
Route::get('/login', 'AdminLoginController@showLogin')->name('login');
Route::post('/login', 'AdminLoginController@login');
Route::any('/logout', 'AdminLoginController@logout')->name('logout');
