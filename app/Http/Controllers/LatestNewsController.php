<?php
namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
/*Latest News Create Controller Function*/

    public function create()
    {
        return view('latestnews.create');
    }

/*Latest News Store Controller Function*/

    public function store(Request $request)
{
    /*Validation missing...Please add validation before storing data*/

    $news = $request->file('pdf');
    $newslatest = time() . '_' . uniqid() . '.' . $news->getClientOriginalExtension();
    $news->move(public_path('latestnews_'), $newslatest);
    $latestnews = new LatestNews;
    $latestnews->content = $request->content;
    $latestnews->pdf_path = 'latestnews_/' . $newslatest;
    $latestnews->save();
    return redirect()->route('latestnews.create');
}

}
