<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index(){
        $Albums = Album::all();
        return view('frontend.gallery', compact('Albums'));
    }
    public function images(string $slug)
    {
        $gallery = Album::where('slug', $slug)->first();
        return $gallery ? view('frontend.gallery', compact('gallery')) : redirect()->back();
    }
    
}
