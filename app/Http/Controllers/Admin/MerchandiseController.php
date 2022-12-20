<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Merchandise\StoreMerchandiseRequest;
use App\Http\Requests\Admin\Merchandise\UpdateMerchandiseRequest;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::latest()->paginate(10);

        return view('admin.merchandise.index', compact('merchandises'));
    }

    public function create()
    {
        $merchandise = new Merchandise();

        return view('admin.merchandise.create',compact('merchandise'));
    }

    public function store(StoreMerchandiseRequest $request)
    {
        $merchandise = Merchandise::create($request->validated());

        $this->storeImage($request, $merchandise);

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise added successfully!');
    }

    public function edit(Merchandise $merchandise)
    {
        return view('admin.merchandise.edit', compact('merchandise'));
    }

    public function update(UpdateMerchandiseRequest $request, Merchandise $merchandise)
    {
        $oldImage = $merchandise->image;

        $merchandise->update($request->validated());

        $this->storeImage($request, $merchandise);

        if (!is_null($oldImage) && $oldImage !== $merchandise->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise updated successfully!');
    }

    public function destroy(Merchandise $merchandise)
    {
        $merchandise->delete();

        $this->deleteImage($merchandise->image);

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise deleted successfully!');
    }

    public function storeImage($request, $merchandise)
    {
        if ($request->has('image')) {
            $merchandise->update([
                'image' => $request->image->store('/', 'merchandise')
            ]);
        }
    }

    public function deleteImage($image)
    {
        if (!is_null($image)) {
            if (Storage::disk('merchandise')->exists($image)) {
                Storage::disk('merchandise')->delete($image);
            }
        }
    }
}
