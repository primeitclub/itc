<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'event_fee',
        'registration_link',
        'event_date',
        'event_time',
       
    ];

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class);
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

    public function eventStatus()
    {
        $eventDate = Carbon::parse($this->event_date);

        if ($eventDate && ($eventDate->isFuture())) {
            return  '<span class="px-2 py-1 text-xs font-semibold leading-tight text-blue-700 uppercase bg-blue-100 rounded-full ">Upcoming</span>';
        }

        return  '<span class="px-2 py-1 text-xs font-semibold leading-tight text-green-700 uppercase bg-green-100 rounded-full ">Completed</span>';
    }

    public function scopeCompleted($query) {
        return $query->where('event_date', '<=', Carbon::now());
    }

    public function scopeUpcoming($query) {
        return $query->where('event_date', '>=', Carbon::now());
    }

    public function thumbnailUrl() {
        return $this->thumbnail ? 
            Storage::disk('thumbnails')->url($this->thumbnail)
            : 
            "";
    }

    public function eventDay() {
        return Carbon::parse($this->event_date)->format('d');
    }

    public function eventMonth() {
        return Carbon::parse($this->event_date)->format('M');
    }
}
