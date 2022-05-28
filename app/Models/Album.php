<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail'
    ];

    public function thumbnailURL(){
        return  Storage::disk('albums')->url($this->thumbnail);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
