<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\RequestLogin;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function getFormLogin()
    {
        return view('auth.login');
    }

    public function postLogin(RequestLogin $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password',);

        if (Auth::attempt($credentials)) {
            // if(Auth::user()->role == 2);
            return redirect()->route('home');
        }

        return redirect()->back()->with('error','Sai thông tin đăng nhập');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
