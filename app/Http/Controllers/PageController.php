<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function travel(){
        return view('travel');
    }

    public function who(){
        return view('who');
    }
    public function faq(){
        return view('faq');
    }
}
