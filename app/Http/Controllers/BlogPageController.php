<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{   
    public function index(){
        $Featuredblog = Blog::latest()->get();
        $Blog = Blog::all();
        return view('frontend.blog', compact('Blog','Featuredblog'));
    }
}
