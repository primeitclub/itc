<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index() {
        $albums = Album::latest()->get();
        return view('frontend.album.index', compact('albums'));
    }

    public function show(Album $album) {
        return view('frontend.album.show', compact('album'));
    }
}
