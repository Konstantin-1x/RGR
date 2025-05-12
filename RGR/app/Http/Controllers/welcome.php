<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{
    public function show(){
        return view('welcome');
    }
}
