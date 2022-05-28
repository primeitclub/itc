<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

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
}
