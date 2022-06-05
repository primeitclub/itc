<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreEventCategoryRequest;
use App\Http\Requests\Admin\Event\UpdateEventCategoryRequest;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        $eventCategories = EventCategory::with('events')->latest()->paginate(10);

        return view('admin.event-categories.index', compact('eventCategories'));
    }

    public function create()
    {
        return view('admin.event-categories.create');
    }

    public function store(StoreEventCategoryRequest $request)
    {
        EventCategory::create($request->validated());

        return redirect()->back()->with('success', 'Event Category created sucessfully!');
    }

    public function edit(EventCategory $eventCategory)
    {
        return view('admin.event-categories.edit', compact('eventCategory'));
    }

    public function update(UpdateEventCategoryRequest $request, EventCategory $eventCategory)
    {
        $eventCategory->update($request->validated());

        return redirect()->route('admin.event-categories.index')->with('success', 'Event category updated successfully!');
    }

    public function destroy(EventCategory $eventCategory)
    {
        Event::where('event_category_id', $eventCategory->id)
            ->update([
                'event_category_id' => config('defaults.default_event_category_id')
            ]);

        if ($eventCategory->id === config('defaults.default_event_category_id')) {
            return redirect()->back()->with('error', 'You can not delete default category!');
        }

        $eventCategory->delete();

        return redirect()->back()->with('success', 'Event category deleted successfully!');
    }
}
