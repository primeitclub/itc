<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'blog_category_id',
        'excerpt',
        'body',
        'thumbnail',
        'author',
        'author_facebook',
        'author_linkedin',
        'published_at'
    ];

    protected $dates = ['published_at'];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function dateFormatted()
    {
        return $this->created_at->format('d-m-Y');
    }

    public function publicationStatus()
    {
        if (!$this->published_at) {
            return  '<span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full ">Draft</span>';
        } elseif ($this->published_at && ($this->published_at->isFuture())) {
            return  '<span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full ">Scheduled</span>';
        } else {
            return  '<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full ">Published</span>';
        }
    }
}
