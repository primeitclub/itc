<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        $executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('batch', date('Y'))->get();
        $generalMembers = Member::GeneralMember()->where('batch',date('Y'))->orderBy('name')->get();
        return view('frontend.members', compact('executiveMembers', 'generalMembers'));
    }
}
