<?php

namespace App\Http\Controllers;

use App\Model\Invoice;
use App\Model\Invoice_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    public function index(){
        return view('client.cart');
    }

    public function updateCart(Request $request){
        $cart = Session::get('cart',[]);
        foreach ($cart as &$item)
        {
            //tong so luong san pham
            $total_qty = $request->input('qty'.$item['id'].'_');
            $item['quantity'] = $total_qty;

            if ($total_qty > 0)
            {
                Session::put('cart', $cart);
            }
        }

        //chuyen sang trang danh sach san pham trong gio hang
        return redirect(route('client.cart'));
    }

    public function add(){
        return view('client.checkout');
    }

    public function postAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'customer_name' => 'required|max:191',
            'customer_phone_number' => 'required|numeric',
            'customer_email' => 'nullable|email',
            'customer_address' => 'required|max:191',
            'total_price' => 'numeric',
            'payment_method' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('client.checkout')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Invoice();

        $model->fill($request->all());
        $flag = $model->save();

        if ($flag) {
            session()->flash('success', "Thành công!!!");


            $cart = Session::get('cart',[]);
            $invoiceId = Invoice::pluck('id')->last();
            foreach ($cart as $item)
            {
                $model1 = new Invoice_Detail();
                $model1->invoice_id = $invoiceId;
                $model1->product_id = $item['id'];
                $model1->quantity   = $item['quantity'];
                $model1->unit_price = $item['price'];
                $model1->save();
            }
            Session::forget('cart');
        } else {
            session()->flash('danger', "Không thành công!!!");
        }

        return redirect(route('client.index'));
    }

    public function remove($id){
        if (Session::has('cart')){
            $cart = Session::get('cart');
            foreach ($cart as $key => $item) {
                if ($item['id'] == $id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
        }
        return redirect(route('client.cart'));
    }
}
