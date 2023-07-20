<?php

namespace App\Http\Controllers;


use App\Models\Event;

use Illuminate\Http\Request;


class EventPageController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::upcoming()->with(['eventCategory', 'speakers'])->latest()->get();
        
        return view('frontend.events.index', compact('upcomingEvents'));
    }

    public function show(Event $event)
    {
        return view('frontend.events.show', compact('event'));
    }
}
