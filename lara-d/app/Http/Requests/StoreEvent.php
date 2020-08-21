<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
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
            'name' => 'required|max:20',
            'detail' => 'required',
            'start_datetime' => 'required|date_format:Y/m/d H:i|after_or_equal:now',
            'end_datetime' => 'required|date_format:Y/m/d H:i|after:start_datetime',
            'number_of_members' => 'required|numeric|min:1',
            'url' => 'required|max:255|url',
        ];
    }
}
