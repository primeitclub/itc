<?php

namespace App\Http\Controllers;


use App\Models\Event;

use Illuminate\Http\Request;


class EventPageController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('frontend.events.index',compact('events'));
    }
    public function show($slug)
    {   
        $report = Event::where('slug', $slug)->firstOrFail();
        return view('frontend.events.show',compact('report'));
    }
}
