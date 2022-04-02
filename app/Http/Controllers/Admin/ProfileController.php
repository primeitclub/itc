<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        return view('admin.users.profile', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->validated());

        return redirect()->back()->with('success', 'Your profile updated successfully!');
    }
}
