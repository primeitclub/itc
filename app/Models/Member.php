<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function memberBatch()
    {
        return Carbon::parse($this->batch)->format('Y');
    }

    public function imageUrl(){
        return $this->image ?
            Storage::disk("members")->url($this->image)
            : 
            "";
    }
}
