<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'event_date',
        'event_time',
    ];

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function EventDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Carbon::parse($value)->format('F j, Y'),
        );
    }

    public function EventTime(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Carbon::parse($value)->format('H:i A'),
        );
    }
}
