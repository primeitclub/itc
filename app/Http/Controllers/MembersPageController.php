<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        $executiveMembers = Member::ExecutiveMember()->get();
        $generalMembers = Member::GeneralMember()->get();
        return view('frontend.members', compact('executiveMembers', 'generalMembers'));
    }
}
