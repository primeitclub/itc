<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('blogCategory')->latest()->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $blogCategories = BlogCategory::all();

        return view('admin.blogs.create', compact('blogCategories'));
    }

    public function store(StoreBlogRequest $request)
    {
        $blog = Blog::create($request->validated());

        $this->storeThumbnail($request, $blog);
        $this->storeAuthorImage($request, $blog);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        $blogCategories = BlogCategory::all();

        return view('admin.blogs.edit', compact('blog', 'blogCategories'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $oldThumbail = $blog->thumbnail;
        $oldAuthorImage = $blog->author_image;

        $blog->update($request->validated());

        $this->storeThumbnail($request, $blog);

        $this->storeAuthorImage($request, $blog);

        if (!is_null($oldThumbail) && $oldThumbail !== $blog->thumbnail) {
            $this->deleteThumbnail($oldThumbail);
        }

        if (!is_null($oldAuthorImage) && $oldAuthorImage !== $blog->author_image) {
            $this->deleteAuthorImage($oldAuthorImage);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function image_upload(Request $request){
        if($request->hasFile('upload')){
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('blog-images'), $fileName);

            $url = asset('blog-images/'.$fileName);

            return response()->json([
                'filename' => $fileName,
                'uploaded' => 1,
                'url' => $url
            ]);
        }
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        $this->deleteThumbnail($blog->thumbnail);
        $this->deleteAuthorImage($blog->author_image);

        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }

    private function storeThumbnail($request, $blog) {
        if ($request->has('thumbnail')) {
            $blog->update([
                'thumbnail' => $request->thumbnail->store('/', 'thumbnails')
            ]);
        }
    }

    public function deleteThumbnail($thumbnail) {
        if (!is_null($thumbnail)) {
            if (Storage::disk('thumbnails')->exists($thumbnail)) {
                Storage::disk('thumbnails')->delete($thumbnail);
            }
        }
    }

    private function storeAuthorImage($request, $blog) {
        if ($request->has('author_image')) {
            $blog->update([
                'author_image' => $request->author_image->store('/', 'authors')
            ]);
        }
    }

    public function deleteAuthorImage($authorImage) {
        if (!is_null($authorImage)) {
            if (Storage::disk('authors')->exists($authorImage)) {
                Storage::disk('authors')->delete($authorImage);
            }
        }
    }
}
