<?php

namespace App\Http\Controllers;
use App\Models\Blog; 
use App\Models\Review; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    { 
        $blogs = Blog::latest()->take(15)->get();
        $reviews = Review::latest()->take(150)->get();
        return view('welcome',compact('blogs','reviews'));
    }
}
