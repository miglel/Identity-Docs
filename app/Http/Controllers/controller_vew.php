<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class controller_vew extends Controller
{
 
     
    function Home(){
        return view('Home');
    }

    function About(){
        return view('About');
    }

    function FAQ(){
        return view('FAQ');
    }

    function NFT(){
        return view('NFTtoDOC');
    }

    function Forms(){
        return view('Forms');
    }

    function Visualaizer(){
        return view('Visualaizer');
    }
}
