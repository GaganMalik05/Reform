<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function loginsubmit(Request $request)
    {
        $credentials=$request->only('user_name','password');

        if (Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email'=>'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
