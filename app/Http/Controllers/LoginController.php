<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function Login()
    {
        return view('login');
    }

    public function LoginProses(Request $request)
    {
        if(Auth::attempt($request->only('user_id','password'))){
            return redirect('/dashboard');
        }else{
            dd('login gagal');
        }
        return redirect('/login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
