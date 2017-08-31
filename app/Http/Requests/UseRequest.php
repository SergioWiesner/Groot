<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UseRequest extends FormRequest
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
            'Identificador' => 'required|max:6',
            'User' => 'required|max:20',
            'Password' => 'required'
        ];
    }
}
