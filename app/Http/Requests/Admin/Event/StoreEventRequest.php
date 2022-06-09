<?php

namespace App\Http\Requests\Admin\Event;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'slug' => ['required', 'unique:events'],
            'event_category_id' => ['required'],
            'thumbnail' => ['sometimes', 'image', 'mimes:jpg,jpeg,png'],
            'description' => ['required'],
            'venue' => ['required'],
            'venue_address' => ['required'],
            'registration_link' => ['nullable', 'url'],
            'event_date' => ['required'],
            'event_time' => ['required']
        ];
    }
}
