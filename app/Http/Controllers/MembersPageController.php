<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        return view('frontend.members');
    }
}
