<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class controller_vew extends Controller
{
 
     
    function Home(){
        return view('Home');
    }

    function Library(){
        return view('Library');
    }

}
