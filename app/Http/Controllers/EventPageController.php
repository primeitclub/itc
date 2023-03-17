<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index() {
        return view('frontend.events.index');
    }
}
