<?php

namespace App\Http\Controllers;

use App\Models\AlumniTestimonial;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Member;

class HomePageController extends Controller
{
    public function index() {
        $featuredEvent = Event::with(['eventCategory','speakers'])->upcoming()->latest()->first();
        $completedFeaturedEvent = Event::with(['eventCategory','speakers'])->completed()->latest()->first();
        $featuredBlog = Blog::with(['blogCategory'])->published()->latest()->first();
        $executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('batch', date('Y'))->get();
        $testimonials = AlumniTestimonial::latest()->get();
        return view('frontend.home', compact('featuredEvent', 'completedFeaturedEvent', 'featuredBlog', 'executiveMembers', 'testimonials'));
    }
}
