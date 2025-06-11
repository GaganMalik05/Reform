<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('/login', [LoginController::class,'login'])->name('login');