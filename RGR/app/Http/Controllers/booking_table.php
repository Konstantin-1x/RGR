<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking_table extends Controller
{
    public function show(){
        return view('booking_table');
    }
    public function bookingTableForm(Request $request){
        dd($request);
        return view('booking_table');
    }
}
