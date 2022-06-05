<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Member\StoreMemberRequest;
use App\Http\Requests\Admin\Member\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return view('admin.members.create',compact('member'));
    }

    public function store(StoreMemberRequest $request)
    {
        $member = Member::create($request->validated());

        $this->storeImage($request, $member);

        return redirect()->back()->with('success', 'New member added successfylly!');
    }

    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $oldImage = $member->image;

        $member->update($request->validated());

        $this->storeImage($request, $member);

        if (!is_null($oldImage) && $oldImage !== $member->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully!');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        $this->deleteImage($member->image);

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully!');
    }

    public function storeImage($request, $speaker)
    {
        if ($request->has('image')) {
            $speaker->update([
                'image' => $request->image->store('/', 'members')
            ]);
        }
    }

    public function deleteImage($image)
    {
        if (!is_null($image)) {
            if (Storage::disk('members')->exists($image)) {
                Storage::disk('members')->delete($image);
            }
        }
    }
}
