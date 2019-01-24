<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Product;
use App\Model\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $products = Product::take(12)->get();
        $articles = Article::take(6)->get();
        return view('client.index',compact('products','articles'));

    }

    public function productDetail($id){
        $product = Product::findOrFail($id);
        $productCategories = Product::take(5)->where('category_id',$product->category_id)->get();
        return view('client.product-detail',compact('product','productCategories'));
    }

    public function addCart(Request $request){
        $product = Product::find($request->id);
        if (!$product){
            return "404 notfound";
        }
        //Kiểm tra cart đã có hay chưa,có thì gán vào $cart , chưa có thì tạo mới.
        $cart = session()->has('cart') == true ? session('cart') : [];
//        $cart = session('cart',[]);
        //Kiểm tra sản phẩm có trong giỏ hàng hay chưa
        $flag = -1;
        foreach ($cart as $key => $value){
            if ($value['id'] === $product->id){
                $flag = $key;
                break;
            }
        }
        //Chưa có trong giỏ hàng thì thêm mới.
        if ($flag === -1){
            $product-> quantity = 1;
            array_push($cart, $product->toArray());
        }
        //Đã có trong giỏ hàng thì tăng số lượng.
        else{
            $cart[$flag]['quantity']++;
        }

        session(['cart' => $cart]);

        return response()->json(['success' => true, 'data' => $cart]);
    }
}
