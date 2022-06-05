<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreSpeakerRequest;
use App\Http\Requests\Admin\Event\UpdateSpeakerRequest;
use App\Models\Event;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::with('event')->latest()->paginate(10);

        return view('admin.speakers.index', compact('speakers'));
    }

    public function create()
    {
        $events = Event::orderBy('title')->get();

        return view('admin.speakers.create', compact('events'));
    }

    public function store(StoreSpeakerRequest $request)
    {
        $speaker = Speaker::create($request->validated());

        $this->storeImage($request, $speaker);

        return redirect()->route('admin.speakers.index')->with('success', 'New Speaker added sucessfully!');
    }

    public function edit(Speaker $speaker)
    {
        $events = Event::orderBy('title')->get();

        return view('admin.speakers.edit', compact('speaker', 'events'));
    }

    public function update(UpdateSpeakerRequest $request, Speaker $speaker)
    {
        $oldImage = $speaker->image;

        $speaker->update($request->validated());

        $this->storeImage($request, $speaker);

        if (!is_null($oldImage) && $oldImage !== $speaker->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker updated successfully!');
    }

    public function destroy(Speaker $speaker)
    {
        $speaker->delete();

        $this->deleteImage($speaker->image);

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker deleted successfully!');
    }

    public function storeImage($request, $speaker)
    {
        if ($request->has('image')) {
            $speaker->update([
                'image' => $request->image->store('/', 'speakers')
            ]);
        }
    }

    public function deleteImage($image)
    {
        if (!is_null($image)) {
            if (Storage::disk('speakers')->exists($image)) {
                Storage::disk('speakers')->delete($image);
            }
        }
    }
}
