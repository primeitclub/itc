<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $admins = User::all();

        $blogs = Blog::all();

        $events = Event::all();

        $members = Member::all();

        return view('admin.home',compact('admins','blogs','events','members'));
    }
}
