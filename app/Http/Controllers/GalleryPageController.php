<?php

namespace App\Http\Controllers;

use App\Models\Album;

class GalleryPageController extends Controller
{
    public function index(){
        $albums = Album::latest()->get();
        return view('frontend.gallery', compact('albums'));
    }

    public function images(string $slug)
    {
        $gallery = Album::where('slug', $slug)->first();
        return $gallery ? view('frontend.images', compact('gallery')) : redirect()->back();
    }
    
}
