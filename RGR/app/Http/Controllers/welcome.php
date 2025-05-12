<?php

namespace App\Http\Controllers;

use App\Models\aboutMe;
use Illuminate\Http\Request;

class welcome extends Controller
{
    public function show(){
        $info = AboutMe::info;
        return view('welcome',compact('info'));
    }
    public function indexForm(Request $request){

       return view('welcome');
    }
}
