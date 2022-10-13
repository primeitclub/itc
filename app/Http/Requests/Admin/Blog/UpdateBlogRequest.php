<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'slug' => ['required', Rule::unique('blogs', 'slug')->ignore($this->blog)],
            'blog_category_id' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'thumbnail' => ['sometimes', 'image', 'mimes:jpg,jpeg,png'],
            'author' => ['required'],
            'author_facebook' => ['nullable','url'],
            'author_linkedin' => ['nullable','url'],
            'published_at' => ['nullable', 'date_format:Y-m-d']
        ];
    }
}
