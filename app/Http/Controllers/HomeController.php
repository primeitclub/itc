<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\AlumniTestimonial;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $event = Event::all();
        $testimonial = AlumniTestimonial::all();
        return view('frontend.home', compact('event','testimonial'));
    }
}
