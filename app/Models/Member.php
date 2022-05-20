<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'testimonial'
    ];

    public function Type(): Attribute
    {
        return new Attribute(
            set: fn ($value) => Str::lower($value),
        );
    }

    public function typeOptions()
    {
        return [
            'general' => 'General',
            'executive' => 'Executive'
        ];
    }
}
