<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        $executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('ending_year', date('Y'))->get();
        $generalMembers = Member::GeneralMember()->where('ending_year',date('Y'))->orderBy('name')->get();
        return view('frontend.members',compact('executiveMembers','generalMembers'));
    }
}
