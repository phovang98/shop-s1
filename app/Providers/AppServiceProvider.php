<?php

namespace App\Providers;

use App\Model\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer(['layouts.partial.header'], function ($view){
            $cart = session()->has('cart') == true ? session('cart') : [];
            $productCategories = Category::select('id','name')->get();
            $view->with('cart', $cart);
            $view->with('productCategories', $productCategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
