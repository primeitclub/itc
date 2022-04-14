<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $blog = new Blog();

        return view('admin.blogs.create', compact('blog'));
    }

    public function store(StoreBlogRequest $request)
    {
        $blog = Blog::create($request->validated());

        $this->storeThumbnail($request, $blog);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $oldThumbail = $blog->thumbnail;

        $blog->update($request->validated());

        $this->storeThumbnail($request, $blog);

        if (!is_null($oldThumbail) && $oldThumbail !== $blog->thumbnail) {
            $this->deleteThumbnail($oldThumbail);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        $this->deleteThumbnail($blog->thumbnail);

        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }

    private function storeThumbnail($request, $blog)
    {
        if ($request->has('thumbnail')) {
            $blog->update([
                'thumbnail' => $request->thumbnail->store('/', 'thumbnails')
            ]);
        }
    }

    public function deleteThumbnail($thumbnail)
    {
        if (Storage::disk('thumbnails')->exists($thumbnail)) {
            Storage::disk('thumbnails')->delete($thumbnail);
        }
    }
}
