<?php

namespace App\Http\Controllers\Admin;

use App\Model\Invoice;
use App\Model\Invoice_Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    public function index(Request $request){
        $invoices = Invoice_Detail::paginate(20);
        return view('admin.invoice.index',compact('invoices'));
    }

    public function postEdit(Request $request){
        $validator = Validator::make($request->all(),[
            'quantity' => 'required|numeric',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('invoice.list')
                ->withErrors($validator)
                ->withInput();
        }
        $invoice = Invoice::find($request->invoice_id);
        $total_price = $invoice->total_price;
        $old_quantity = Invoice_Detail::where('product_id',$request->product_id)->where('invoice_id',$request->invoice_id)->pluck('quantity')->first();
        $new_quantity = $request->quantity;
        $unit_price = $request->unit_price;;
        $new_total_price = ($total_price + ($new_quantity - $old_quantity)*$unit_price);
        $flag = Invoice_Detail::where('product_id',$request->product_id)->where('invoice_id',$request->invoice_id)->update(['quantity' => $request->quantity,'status' => $request->status]);

        if ($flag) {
            session()->flash('success', "Thành công!!!");
            Invoice::where('id',$request->invoice_id)->update(['total_price' => $new_total_price]);
        } else {
            session()->flash('danger', "Không thành công!!!");
        }

        return redirect(route('invoice.list'));
    }

    public function remove($invoice_id,$product_id){
        $model = Invoice_Detail::where('invoice_id',$invoice_id)->where('product_id',$product_id)->first();
        $count = Invoice_Detail::where('invoice_id',$invoice_id)->pluck('product_id');
        if (count($count)>1) {
            $quantity = $model->quantity;
            $price = $model->unit_price;

            $msg = Invoice_Detail::where('invoice_id', $invoice_id)->where('product_id', $product_id)->delete();
            if ($msg) {
                $invoice = Invoice::find($invoice_id);
                $new_total_price = $invoice->total_price = $invoice->total_price - ($quantity * $price);
                $invoice->total_price = $new_total_price;
                $invoice->save();
                session()->flash('success', "Thành công!!!");

            } else {
                session()->flash('danger', "Không thành công!!!");
            }
            return redirect(route('invoice.list'));
        }
        else{
            $msg = Invoice_Detail::where('invoice_id', $invoice_id)->where('product_id', $product_id)->delete();
            if ($msg){
                Invoice::find($invoice_id)->delete();
                session()->flash('success', "Thành công!!!");
            } else {
                session()->flash('danger', "Không thành công!!!");
            }
            return redirect(route('invoice.list'));
        }
//        return response()->json(array(
//            'status' => 400,
//            'msg' => '400: Bad Request'
//        ));
    }
}
