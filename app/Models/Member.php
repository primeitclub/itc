<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'starting_year',
        'ending_year',
        'type',
        'designation',
        'email',
        'facebook',
        'linkedin',
        'github',
        'instagram',
        'testimonial'
    ];

    public function typeOptions()
    {
        return [
            'general' => 'General',
            'executive' => 'Executive'
        ];
    }

    public function imageUrl()
    {
        return $this->image ?
            Storage::disk("members")->url($this->image)
            :
            "";
    }

    protected function Designation(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }

    public function scopeExecutiveMember($query)
    {
        return $query->where('type', 'Executive');
    }

    public function scopeGeneralMember($query)
    {
        return $query->where('type', 'General');
    }

    public function scopeOrderByDesignation($query)
    {
        return $query->orderByRaw('
        CASE
        WHEN "designation" = \'President\' THEN 1
        WHEN "designation" = \'Vice President\' THEN 2
        WHEN "designation" = \'Secretary\' THEN 3
        WHEN "designation" = \'Event Management Director\' THEN 4
        WHEN "designation" = \'External Relationship Director\' THEN 5
        WHEN "designation" = \'Finance Director\' THEN 6
        WHEN "designation" = \'Human Resource Director\' THEN 7
        WHEN "designation" = \'Marketing Director\' THEN 8
        ELSE 9 -- Use a value that comes after the specified designations
        END
    ');
    }
}
