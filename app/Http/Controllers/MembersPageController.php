<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class MembersPageController extends Controller
{
    public function index() {
        $Exemembers = Member::where('type','Executive')->get();
        $Generalmembers = Member::where('type', 'General')->get();
        return view('frontend.member', compact('Exemembers','Generalmembers'));
    }
}
