<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarDatos extends FormRequest
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
            'IdPer' => 'required',
            'user' => 'required|max:12',
            'Idestado' => 'required|max:12',
            'Identificador' => 'required',
            'Nombres' => 'required|max:30|string',
            'correo' => 'required|max:30|email',
            'Telefono' => 'required|max:10',
            'Cargo' => 'required'
            
        ];
    }
}
