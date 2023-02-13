<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        $executiveMembers = Member::executiveMember()->get();
        $generalMembers = Member::generalMember()->get();
        return view('frontend.members', compact('executiveMembers','generalMembers'));
    }
}
