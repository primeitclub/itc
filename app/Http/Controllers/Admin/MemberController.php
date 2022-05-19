<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Member\StoreMemberRequest;
use App\Http\Requests\Admin\Member\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->paginate(10);

        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        $member = new Member();

        return view('admin.members.create', compact('member'));
    }

    public function store(StoreMemberRequest $request)
    {
        Member::create($request->validated());

        return redirect()->back()->with('success', 'New member added successfylly!');
    }

    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->update($request->validated());

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully!');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully!');
    }
}
