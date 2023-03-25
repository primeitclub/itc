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
        'batch',
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

    public function imageUrl(){
        return $this->image ?
            Storage::disk("members")->url($this->image)
            : 
            "";
    }

    protected function Designation(): Attribute {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }

    public function scopeExecutiveMember($query) {
        return $query->where('type', 'Executive');
    }

    public function scopeGeneralMember($query) {
        return $query->where('type', 'General');
    }
}
