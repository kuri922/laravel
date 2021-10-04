<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function home(){
        return view('home');
    }

    public function mypage(){
        return view('mypage');
    }
    

    public function info(){
        return view('info');
    }

}


