<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\AlumniTestimonial;
use App\Models\Member;
use App\Models\Blog;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $event = Event::latest()->first();
        $blogs = Blog::latest()->first();
        $members = Member::all();
        $testimonial = AlumniTestimonial::all();
        return view('frontend.home', compact('event','blogs','members','testimonial'));
    }
}
