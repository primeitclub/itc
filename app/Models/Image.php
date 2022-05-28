<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'image'
    ];

    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function imageURL(){
        return  Storage::disk('images')->url($this->image);
    }
}
