<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function login(Request $request){
        $remember = $request->has('remember');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            return redirect(route('dashboard'));
        }else{
            return view('admin.login')->with('msg1', 'Sai tài khoản/mật khẩu');
        }
    }
}
