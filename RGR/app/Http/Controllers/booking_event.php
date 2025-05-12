<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking_event extends Controller
{
    public function show(){
        return view('booking_event');
    }
    public function bookingEventForm( Request $request){
        $request->validate([]);
        return view('booking_event');
    }
}
