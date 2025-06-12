<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WhosWhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginsubmit']);
Route::get('/search',[SearchController::class,'search'])->name('search');

Route::get('/admin',function(){
    return view('admin');
})->middleware('auth');


Route::get('/publication', [PublicationController::class,'index'])->name('publication');
Route::get('/publication/create', [PublicationController::class,'create'])->name('publication.create');
Route::post('/publication/store', [PublicationController::class,'store'])->name('publication.store');

Route::get('/whoswho',[WhosWhoController::class,'index'])->name('whoswho.index');
Route::get('/whoswho/create',[WhosWhoController::class,'create'])->name('whoswho.create');
Route::post('/whoswho/store',[WhosWhoController::class,'store'])->name('whoswho.store');