<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index(){
        $cateNumber = Category::count();
        $productNumber = Product::count();
        $userNumber = User::count();
    	return view('admin.index', compact('cateNumber', 'productNumber','userNumber'));
    }

    public function sendMail($rcEmail, $subject, $content){

        $data = array('content'=> $content);
        Mail::send('mail', $data, function($message) use ($rcEmail, $subject, $content) {
            $message->to($rcEmail, 'ThienTH')
                    ->subject($subject);
            $message->from('hoangtuan51096@gmail.com','Hoang Tuan');
        });
        return "HTML Email Sent. Check your inbox.";
    }
}
