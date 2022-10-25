<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        $name = "Adrian";
        $x = 10;
        $age = "";
        $names = array('David', 'Jonh', 'Hop', 'Adrian');
        // $names=[];
        // return view('about', compact('x','name','age'));
        return view('about', [
            'names'=> $names,
        ]);

    }
}
