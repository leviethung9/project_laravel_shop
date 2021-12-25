<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    // public function showFormRegister()
    // {
    //     return view('auth.register');
    // }

    // public function register(Request $request)
    // {
    //     $user = new User();
    //     // $user->role = $request->role;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = bcrypt($request->password);

    //     $user->save();
    //     return redirect()->route('show-form-register')->with('success','Đăng ký thành công');
    // }

    public function showFormLogin()
    {
        return view('auth_admin.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email','password','role'))){
            if(Auth::user()->role == 1){
             
                return redirect()->route('admin.index')->with('success','Đăng nhập thành công');
            }
            else{
                return redirect()->route('get.home')->with('success','Đăng nhập thành công');
            }
        };
         
        return redirect()->route('show-form-login')->with('error','Thông tin đăng nhập chưa chính xác');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show-form-login');
    }
}
