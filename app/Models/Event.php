<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'event_category_id',
        'thumbnail',
        'description',
        'venue',
        'venue_address',
        'event_date'
    ];

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class);
    }

}
