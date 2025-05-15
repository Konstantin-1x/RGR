<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking_event extends Controller
{
    public function show(){
        $session = session();
        if(!$session->has('language')){
            $session->put('language', "ru");
        }
        if($session->get('language') === 'ru'){
            return view('ru\booking_event');
        }else if($session->get('language') === 'en'){
            return view('en\booking_event');
        }
    }
    public function bookingEventForm( Request $request){
        $request->validate([]);
        return view('booking_event');
    }
}
