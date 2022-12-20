<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AlumniTestimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'designation',
        'facebook',
        'linkedin',
        'instagram',
        'testimonial'
    ];

    public function imageUrl(){
        return $this->image ?
            Storage::disk("alumnus")->url($this->image)
            : 
            "";
    }

}
