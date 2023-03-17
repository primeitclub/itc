<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;


class EventPageController extends Controller
{
    public function index() {
        $event = Event::latest()->first()->get();
        return view('frontend.events.index',compact('event'));
    }
    public function show($slug)
    {   
        return view('frontend.events.show');
    }
}
