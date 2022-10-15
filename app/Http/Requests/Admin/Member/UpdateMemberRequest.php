<?php

namespace App\Http\Requests\Admin\Member;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png'],
            'batch' => ['required', 'date'],
            'type' => ['required'],
            'designation' => ['sometimes'],
            'email' => ['required', 'email'],
            'facebook' => ['required', 'url'],
            'linkedin' => ['nullable', 'url'],
            'github' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'testimonial' => ['sometimes'],
        ];
    }
}
