<?php

namespace App\Http\Controllers;

use App\Models\aboutMe;
use Illuminate\Http\Request;

class welcome extends Controller
{
    public function show(){
        $session = session();
        if(!$session->has('language')){
            $session->put('language', "ru");
        }

        $info = AboutMe::info;
        $reviews = AboutMe::reviews;

        if($session->get('language') == 'ru'){
            return view('ru\welcome',compact('info','reviews'));
        }else if($session->get('language') == 'en'){
            return view('en\welcome',compact('info','reviews'));
        }
    }
    public function indexForm(Request $request){
        $session = session();
        if(!$session->has('language')){
            $session->put('language', "ru");
        }

        $info = AboutMe::info;
        $reviews = AboutMe::reviews;

        if($session->get('language') == 'ru'){
            return view('ru\welcome',compact('info','reviews'));
        }else if($session->get('language') === 'en'){
            return view('en\welcome',compact('info','reviews'));
        }
    }

    public function exchangeLanguage(){
        $session = session();
        if ($session->get('language') == 'ru') {
            $session->put('language', 'en');
        } else {
            $session->put('language', 'ru');
        }

//        dd($session);

        return redirect()->route('welcome');
    }
}
