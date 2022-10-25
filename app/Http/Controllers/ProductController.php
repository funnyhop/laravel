<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title='Dinh Thai Hop';
        $x=1;
        $y=0;
        $name='Hop';
        //truyen doi va hien thi
        // return view('products.index', compact('title', 'x', 'y'));
        // return view('products.index')->with('name', $name);
        //truyen mot mang va hien thi
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavorited' => true
        ];
        // return view('products.index', compact('myphone'));
        // hien thi khong bang mang khong dung compact(''), with('',$)
        // return view('products.index',[
        //     'myphone' => $myphone
        // ]);
        print_r(route('products'));
        return view('products.index');
    }
    
    public function detail($id, $productName){
        //hien thi co su dung tham so dau vao $id, $productName url/id_or_productName
        // return "product's id = ".$id;
        // $phones = [
        //     'iphone 13' => 'iphone 13',
        //     'samsung' => 'samsung',
        //     'realme' => 'realme'
        // ];
        // return view('products.index',[
        //     'product' => $phones[$productName] ?? 'unkown product',
        // ]);
        return "product's id= ".$id.
        ", productName= ".$productName;
    }
}
