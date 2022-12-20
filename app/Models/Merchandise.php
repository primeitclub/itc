<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "image",
        "price",
        "description",
        "form_link"
    ];

    public function imageUrl(){
        return $this->image ?
            Storage::disk("merchandise")->url($this->image)
            : 
            "";
    }

}
