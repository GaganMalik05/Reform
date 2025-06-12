<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('/login', [LoginController::class,'login'])->name('login');

Route::get('/publication', [PublicationController::class,'index'])->name('publication');
Route::get('/publication/create', [PublicationController::class,'create'])->name('publication.create');
Route::post('/publication/store', [PublicationController::class,'store'])->name('publication.store');