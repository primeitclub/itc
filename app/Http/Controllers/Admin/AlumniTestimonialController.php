<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AlumniTestimonial\StoreAlumniTestimonialRequest;
use App\Http\Requests\Admin\AlumniTestimonial\UpdateAlumniTestimonialRequest;
use App\Models\AlumniTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniTestimonialController extends Controller
{
    public function index()
    {
        $alumniTestimonials = AlumniTestimonial::latest()->paginate(10);

        return view('admin.alumni-testimonial.index', compact('alumniTestimonials'));
    }

    public function create()
    {
        $alumniTestimonial = new AlumniTestimonial();

        return view('admin.alumni-testimonial.create',compact('alumniTestimonial'));
    }

    public function store(StoreAlumniTestimonialRequest $request)
    {
        $alumniTestimonial = AlumniTestimonial::create($request->validated());

        $this->storeImage($request, $alumniTestimonial);

        return redirect()->back()->with('success', 'Testimonial added successfylly!');
    }

    public function edit(AlumniTestimonial $alumniTestimonial)
    {
        return view('admin.alumni-testimonial.edit', compact('alumniTestimonial'));
    }

    public function update(UpdateAlumniTestimonialRequest $request, AlumniTestimonial $alumniTestimonial)
    {
        $oldImage = $alumniTestimonial->image;

        $alumniTestimonial->update($request->validated());

        $this->storeImage($request, $alumniTestimonial);

        if (!is_null($oldImage) && $oldImage !== $alumniTestimonial->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route('admin.alumni-testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(AlumniTestimonial $alumniTestimonial)
    {
        $alumniTestimonial->delete();

        $this->deleteImage($alumniTestimonial->image);

        return redirect()->route('admin.alumni-testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    public function storeImage($request, $alumniTestimonial)
    {
        if ($request->has('image')) {
            $alumniTestimonial->update([
                'image' => $request->image->store('/', 'alumnus')
            ]);
        }
    }

    public function deleteImage($image)
    {
        if (!is_null($image)) {
            if (Storage::disk('alumnus')->exists($image)) {
                Storage::disk('alumnus')->delete($image);
            }
        }
    }
}
