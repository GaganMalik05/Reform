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

    

    $credentials = [
        'user_name' => $request->input('user_name'),
        'password' => $request->input('password'),
    ];
    
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate(); // Important for security
        return redirect()->intended('admin');
    }

    // dd($request->all());

    return back()->withErrors([
        'user_name' => 'Invalid credentials.',
    ])->onlyInput('user_name'); // Keeps the username input filled
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function admin()
{
    return view('admin'); // Make sure you have a view file resources/views/admin.blade.php
}
}
