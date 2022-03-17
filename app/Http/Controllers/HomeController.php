<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data = Post::all();
        // dd($data);
        return view('home',compact('data'));
    }
}
