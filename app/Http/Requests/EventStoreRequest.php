<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required',
            'event_type_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'event_type_id.required' => 'Event Type field is required'
        ];
    }
}
