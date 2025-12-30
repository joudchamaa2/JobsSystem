<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainContoller extends Controller
{
    function home(){
        return view('main.home');
    }
}
