<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        return view("publication.index");
    }

    public function create()
    {
        return view("publication.create");
    }

    public function store(Request $request)
    {
        // Upload File
        $fileName = time().".".$request->file("")->getClientOriginalExtension();
        $request->file("")->move("", $fileName);

        dd($fileName);
    }
}
