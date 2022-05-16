<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreSpeakerRequest;
use App\Http\Requests\Admin\Event\UpdateSpeakerRequest;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::latest()->paginate(10);

        return view('admin.speakers.index', compact('speakers'));
    }

    public function create()
    {
        $speaker = new Speaker();

        return view('admin.speakers.create', compact('speaker'));
    }

    public function store(StoreSpeakerRequest $request)
    {
        Speaker::create($request->validated());

        return redirect()->route('admin.speakers.index')->with('success', 'New Speaker added sucessfully!');
    }

    public function edit(Speaker $speaker)
    {
        return view('admin.speakers.edit', compact('speaker'));
    }

    public function update(UpdateSpeakerRequest $request, Speaker $speaker)
    {
        $speaker->update($request->validated());

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker updated successfully!');
    }

    public function destroy(Speaker $speaker)
    {
        $speaker->delete();

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker deleted successfully!');
    }
}
