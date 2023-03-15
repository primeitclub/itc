<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{   
    public function index(){
        $featuredBlog = Blog::latest()->first();
        $blogs = Blog::with('blogCategory')->published()->get();
        return view('frontend.blogs.index', compact('blogs','featuredBlog'));
    }

    public function show($slug)
    {   
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blogs.show', compact('blog'));
    }

}
