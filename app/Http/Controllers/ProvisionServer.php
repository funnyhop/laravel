<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionServer extends Controller
{
    //
    public function Home(){
        return view('home');
    }

    public function index(){
        return view('welcome');
    }

    public function News(){
        return view('news');
    }

}
