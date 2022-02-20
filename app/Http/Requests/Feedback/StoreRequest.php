<?php

namespace App\Http\Requests\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'regex:/[0-9]{11}/'],
            'message' => ['required', 'string'],
        ];
    }
}
