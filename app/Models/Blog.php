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
        'published_at'
    ];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
