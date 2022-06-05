<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request){

        if($request->has('images')){
            foreach($request->file('images') as $image){
                $imageName = $image->store('/','images');

                Image::create([
                    'album_id'=>$request->album_id,
                    'image'=>$imageName,
                ]);

            }
        }

        return redirect()->back()->with('success','Images uploaded successfully!');
    }

      public function destroy(Image $image){
        if (Storage::disk('images')->exists($image->image)) {
            Storage::disk('images')->delete($image->image);
        }

        $image->delete();

        return redirect()->back()->with('success','Image deleted successfully!');
    }
}
