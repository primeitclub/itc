<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index() {
        $event = Event::latest()->take(6)->get();
        return view('frontend.events', compact('event'));
    }
}
