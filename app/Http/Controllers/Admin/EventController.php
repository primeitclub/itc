<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreEventRequest;
use App\Http\Requests\Admin\Event\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with(['eventCategory', 'speakers'])->latest()->paginate(10);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $eventCategories = EventCategory::all();

        return view('admin.events.create', compact('eventCategories'));
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->validated());

        $this->storeThumbnail($request, $event);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
    }

    public function edit(Event $event)
    {
        $eventCategories = EventCategory::all();

        return view('admin.events.edit', compact('event', 'eventCategories'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $oldThumbail = $event->thumbnail;

        $event->update($request->validated());

        $this->storeThumbnail($request, $event);

        if (!is_null($oldThumbail) && $oldThumbail !== $event->thumbnail) {
            $this->deleteThumbnail($oldThumbail);
        }

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        $this->deleteThumbnail($event->thumbnail);

        return redirect()->back()->with('success', 'Event deleted successfully!');
    }

    private function storeThumbnail($request, $event)
    {
        if ($request->has('thumbnail')) {
            $event->update([
                'thumbnail' => $request->thumbnail->store('/', 'thumbnails')
            ]);
        }
    }

    public function deleteThumbnail($thumbnail)
    {
        if (!is_null($thumbnail)) {
            if (Storage::disk('thumbnails')->exists($thumbnail)) {
                Storage::disk('thumbnails')->delete($thumbnail);
            }
        }
    }
}
