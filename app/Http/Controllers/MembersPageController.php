<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        $executiveMembers = Member::ExecutiveMember()->where('batch',date('Y'))->orderBy('name')->get();
        $generalMembers = Member::GeneralMember()->where('batch',date('Y'))->orderBy('name')->get();
        return view('frontend.members', compact('executiveMembers', 'generalMembers'));
    }
}
