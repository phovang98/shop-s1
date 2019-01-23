<?php

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'product'], function (){
    Route::get('/', 'ProductController@index')->name('product.list');
    Route::get('/remove/{id}', 'ProductController@remove')->name('product.remove');
    Route::get('/add', 'ProductController@add')->name('product.add');
    Route::post('/add', 'ProductController@postAdd');
    Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::post('/edit/{id}', 'ProductController@postEdit')->name('product.save-edit');
    Route::post('/upload-product-gallery/{id}', "ProductController@uploadGallery")->name('product.upload-gallery');
    Route::post('/remove-product-gallery/{id}', "ProductController@removeGallery")->name('product.remove-gallery');
});

Route::group(['prefix' => 'article'], function (){
    Route::get('/', 'ArticleController@index')->name('article.list');
    Route::get('/remove/{id}', 'ArticleController@remove')->name('article.remove');
    Route::get('/add', 'ArticleController@add')->name('article.add');
    Route::post('/add', 'ArticleController@postAdd');
    Route::get('/edit/{id}', 'ArticleController@edit')->name('article.edit');
    Route::post('/edit/{id}', 'ArticleController@postEdit')->name('article.save-edit');
});

Route::group(['prefix' => 'supplier'], function (){
    Route::get('/', 'SupplierController@index')->name('supplier.list');
    Route::get('/remove/{id}', 'SupplierController@remove')->name('supplier.remove');
    Route::get('/add', 'SupplierController@add')->name('supplier.add');
    Route::post('/add', 'SupplierController@postAdd');
    Route::get('/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
    Route::post('/edit/{id}', 'SupplierController@postEdit')->name('supplier.save-edit');
});

Route::group(['prefix' => 'slide'], function (){
    Route::get('/', 'SlideController@index')->name('slide.list');
    Route::get('/remove/{id}', 'SlideController@remove')->name('slide.remove');
    Route::get('/add', 'SlideController@add')->name('slide.add');
    Route::post('/add', 'SlideController@postAdd');
    Route::get('/edit/{id}', 'SlideController@edit')->name('slide.edit');
    Route::post('/edit/{id}', 'SlideController@postEdit')->name('slide.save-edit');
});

Route::group(['prefix' => 'user'], function (){
    Route::get('/', 'UserController@index')->name('user.list');
    Route::get('/remove/{id}', 'UserController@remove')->name('user.remove');
    Route::get('/add', 'UserController@add')->name('user.add');
    Route::post('/add', 'UserController@postAdd');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/edit/{id}', 'UserController@postEdit')->name('user.save-edit');
});