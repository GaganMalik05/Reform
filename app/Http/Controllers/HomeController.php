<?php

namespace App\Http\Controllers;
use App\Models\LatestNews;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*Home index Controller Function for fetching latest news*/
    public function index()
    {
       $news=LatestNews::latest('id')->take(3)->get(); // capped at 3 news 
        return view('home.index', compact('news')); 
    }
}
