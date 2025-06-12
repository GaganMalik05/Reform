<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhosWho;
class WhosWhoController extends Controller
{
    public function index(){
        $people = WhosWho::all();
        return view('whoswho.index', compact('people'));
    }
    public function create(){
        return view('whoswho.create');
    }
     public function store(Request $request){
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $imageName);
        $profile = new WhosWho;
        $profile->name = $request->name;
        $profile->Designation = $request->Designation;
        $profile->ContactNo = $request->ContactNo;
        $profile->Email = $request->Email;
        $profile->image = $imageName;
        $profile->save();
    }
    
}
