<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        // Query builders
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id;",[
        //     'id' => 1
        // ]);
        $posts = DB::table('posts')
            ->where('id', 6)
            ->delete(); //delete co id = 4
            // ->update([
            //     //truong nao update thi ghi vao, khong ghi thi khong update
            //     'title' => 'Hello World'
            // ]);
            // ->insert([
            //     'title' => 'Hello',
            //     'body' => 'A new post by insert'
            // ]);
            // ->avg('id'); //tinh trung binh cac id
            //->sum('id'); //sum cac id
            //->min('id'); //min id
            //->count(); //count *
            // ->find(2); // find id = 2
            // ->whereBetween('id',[1,3])
            // ->latest() //ban ghi moi nhat
            // ->oldest() //ban ghi cu nhat
            // ->orderBy('id', 'desc')
            // ->orderBy('id', 'asc')
            // ->whereNull("created_at")
            // ->whereNotNull("created_at")
            // ->where("id",3)
            // ->orwhere('id','>',1)
            // ->select("title")
            // ->first(); //ban ghi duoc tao dau tien (hop le khi comment "->get()" lai chu y dau cham phay)
            // ->get();
        dd($posts); // die dump
        // return view('posts.index');
    }
}
