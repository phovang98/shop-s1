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

Route::post('/add-cart', "HomeController@addCart")->name('cart.add');
Route::get('/check-cart', function(){
    dd(session('cart'));
})->name('cart.checkout');
Route::get('/remove-cart', function(){
    session()->forget('cart');
    return redirect(route('client.cart'));
})->name('cart.clear');


Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/article','ArticleController@index')->name('client.article');
Route::get('/article-detail/{id}','ArticleController@articleDetail')->name('client.article-detail');

Route::get('/cart','InvoiceController@index')->name('client.cart');
Route::post('/cart','InvoiceController@updateCart');
Route::get('/cart-remove/{id}','InvoiceController@remove')->name('client.cart-remove');

Route::get('/checkout','InvoiceController@add')->name('client.checkout');
Route::post('/checkout', 'InvoiceController@postAdd');

Route::group(['prefix' => 'product'], function (){
    Route::get('/', 'ProductController@index')->name('client.product');

    Route::get('/product-detail/{id}', 'HomeController@productDetail')->name('client.product-detail');
});

//đăng nhập
Route::get('/login', 'AdminLoginController@showLogin')->name('login');
Route::post('/login', 'AdminLoginController@login');
Route::any('/logout', 'AdminLoginController@logout')->name('logout');
