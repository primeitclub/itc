<?php

namespace App\Http\Requests\Admin\Event;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSpeakerRequest extends FormRequest
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
            'event_id' => ['required'],
            'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png'],
            'description' => ['required'],
            'facebook' => ['nullable', 'url'],
            'twitter' => ['nullable', 'url'],
            'linkedin' => ['nullable', 'url']
        ];
    }
}
