<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreBlogCategoryRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogCategoryRequest;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blogCategories = BlogCategory::latest()->paginate(10);

        return view('admin.blog-categories.index', compact('blogCategories'));
    }

    public function create()
    {
        $blogCategory = new BlogCategory();

        return view('admin.blog-categories.create', compact('blogCategory'));
    }

    public function store(StoreBlogCategoryRequest $request)
    {
        BlogCategory::create($request->validated());

        return redirect()->back()->with('success', 'Blog Category created sucessfully!');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.blog-categories.edit', compact('blogCategory'));
    }

    public function update(UpdateBlogCategoryRequest $request, BlogCategory $blogCategory)
    {
        $blogCategory->update($request->validated());

        return redirect()->route('admin.blog-categories.index')->with('success', 'Blog category updated successfully!');
    }

    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();

        return redirect()->back()->with('success', 'Blog category deleted successfully!');
    }
}
