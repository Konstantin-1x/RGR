<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking_table extends Controller
{
    public function show(){
        $session = session();
        if(!$session->has('language')){
            $session->put('language', "ru");
        }
        if($session->get('language') === 'ru'){
            return view('ru\booking_table');
        }else if($session->get('language') === 'en'){
            return view('en\booking_table');
        }
    }
    public function bookingTableForm(Request $request){
        dd($request);
        return view('booking_table');
    }
}
