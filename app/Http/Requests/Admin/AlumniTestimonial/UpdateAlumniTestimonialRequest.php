<?php

namespace App\Http\Requests\Admin\AlumniTestimonial;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlumniTestimonialRequest extends FormRequest
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
            'name' => ['required'],
            'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png','max:200'],
            'designation' => ['sometimes'],
            'facebook' => ['required', 'url'],
            'linkedin' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'testimonial' => ['required'],
        ];
    }
}
