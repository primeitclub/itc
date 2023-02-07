<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{   
    public function index(){
        $featuredBlog = Blog::latest()->get();
        $blogs = Blog::published()->get();
        return view('frontend.blog', compact('blogs','featuredBlog'));
    }
}
