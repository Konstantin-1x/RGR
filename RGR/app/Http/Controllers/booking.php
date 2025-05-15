<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking extends Controller
{
    public function show(){
        $session = session();
        if(!$session->has('language')){
            $session->put('language', "ru");
        }


        if($session->get('language') === 'ru'){
            return view('ru\booking');
        }else if($session->get('language') === 'en'){
            return view('en\booking');
        }
    }
}
