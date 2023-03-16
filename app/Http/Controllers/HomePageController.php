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
        $featuredBlog = Blog::latest()->first();
        $executiveMembers = Member::executiveMember()->get();
        $testimonials = AlumniTestimonial::all();
        return view('frontend.home', compact('event','featuredBlog','executiveMembers','testimonials'));
    }
}
