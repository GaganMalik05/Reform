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
        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);
        $credentials=$request->only('user_name','password');

        if (Auth::attempt($credentials)){
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'user_name'=>'Invalid credentials.',
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
