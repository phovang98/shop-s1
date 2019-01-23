<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if ($request->keyword){
            $products = Product::where('name', 'like', "%$request->keyword%")->paginate(15);
            $products->withPath('?keyword='. $request->keyword);
        }else{
            $products = Product::paginate(15);
        }

        return view('client.product',compact('products','keyword'));
    }
}
