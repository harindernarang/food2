<?php

namespace App\Http\Controllers;
use App\Models\Blog; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    { 
        $blogs = Blog::latest()->take(15)->get();
        return view('welcome',compact('blogs'));
    }
}
