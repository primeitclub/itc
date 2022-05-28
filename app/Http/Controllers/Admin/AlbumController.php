<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Album\StoreAlbumRequest;
use App\Http\Requests\Admin\Album\UpdateAlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::latest()->paginate(4);

        return view('admin.albums.index',compact('albums'));
    }

    public function create()
    {
        return view('admin.albums.create');
    }

    public function store(StoreAlbumRequest $request)
    {
        $album = Album::create($request->validated());

        $this->storeThumbnail($request,$album);

        return redirect()->route('admin.albums.index')->with('success','New album created successfylly!');
    }

    public function edit(Album $album)
    {
        return view('admin.albums.edit',compact('album'));
    }

    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $oldThumbail = $album->thumbnail;

        $album->update($request->validated());

        $this->storeThumbnail($request, $album);

        if (!is_null($oldThumbail) && $oldThumbail !== $album->thumbnail) {
            $this->deleteThumbnail($oldThumbail);
        }

        return redirect()->route('admin.albums.index')->with('success', 'Album updated successfully!');
    }

    public function show(Album $album)
    {
        return view('admin.albums.show',compact('album'));
    }

    public function destroy(Album $album)
    {
        $album->delete();

        $this->deleteThumbnail($album->thumbnail);

        return redirect()->back()->with('success', 'Album deleted successfully!');
    }

    private function storeThumbnail($request, $album)
    {
        if ($request->has('thumbnail')) {
            $album->update([
                'thumbnail' => $request->thumbnail->store('/', 'albums')
            ]);
        }
    }

    private function deleteThumbnail($thumbnail)
    {
        if (!is_null($thumbnail)) {
            if (Storage::disk('albums')->exists($thumbnail)) {
                Storage::disk('albums')->delete($thumbnail);
            }
        }
    }
}
