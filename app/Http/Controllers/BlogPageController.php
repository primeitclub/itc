<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{   
    public function index(){
        $featuredBlog = Blog::latest()->first();
        $blogs = Blog::all();
        return view('frontend.blogs.index', compact('blogs','featuredBlog'));
    }

    public function show(Blog $blog)
    {   
        return view('frontend.blogs.show', compact('blog'));
    }

}
