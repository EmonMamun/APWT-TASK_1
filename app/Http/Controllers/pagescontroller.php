<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    function home(){
       
        return view('homepage');
    }
    function about(){
        return view('about');
    }
    function contact(){
       
        return view('contact');
    }
    function teams(){
        return view('OurTeam');
    }

}
