<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function travel(){
        $travels=Travel::paginate(10);
        return view('travel',['travels'=>$travels]);
    }

    public function who(){
        return view('who');
    }
    public function faq(){
        return view('faq');
    }
}
