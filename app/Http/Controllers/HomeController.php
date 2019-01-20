<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $products = Product::take(12)->get();
        return view('client.index',compact('products'));

    }
}
