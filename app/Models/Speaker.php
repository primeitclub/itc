<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'image',
        'description',
        'facebook',
        'twitter',
        'linkedin'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }


    public function imageUrl() {
        return $this->thumbnail ? 
            Storage::disk('speakers')->url($this->thumbnail)
            : 
            "";
    }
}
