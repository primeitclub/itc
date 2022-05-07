<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Events\StoreEventCategoryRequest;
use App\Http\Requests\Admin\Events\UpdateEventCategoryRequest;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        $eventCategories = EventCategory::latest()->paginate(10);

        return view('admin.event-categories.index', compact('eventCategories'));
    }

    public function create()
    {
        $eventCategory = new EventCategory();

        return view('admin.event-categories.create', compact('eventCategory'));
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
        $eventCategory->delete();

        return redirect()->back()->with('success', 'Event category deleted successfully!');
    }
}
