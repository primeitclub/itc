<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index() {
        return view('frontend.album.index');
    }
    public function show($slug) {
        return view('frontend.album.show');
    }
}
