<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusPageController extends Controller
{
    public function index()
    {
        return view('frontend.about');
    }
}
