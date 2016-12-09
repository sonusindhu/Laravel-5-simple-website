<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
//        die("home");
        return view('welcome' );
    }
    public function about(){
        die("about");
    }
    public function contact(){
        die("contact");
    }
    
}
