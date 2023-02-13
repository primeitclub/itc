<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{   
    public function index(){
        $featuredBlog = Blog::latest()->get();
        $blogs = Blog::with('blogCategory')->published()->get();
        return view('frontend.blogs', compact('blogs','featuredBlog'));
    }

    public function pages(string $slug)
    {
        $article = Blog::where('slug', $slug)->first();
        return $article ? view('frontend.article', compact('article')) : redirect()->back();
    }
    

}
