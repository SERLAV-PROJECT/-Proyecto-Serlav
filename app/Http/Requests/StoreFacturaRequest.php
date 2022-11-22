<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreFacturaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nombreCliente" => 'required|min:2|max:50',
            "fecha" => 'required',
        ];
    }

    public function messages()
    {
        return [
            
            'nombreCliente.required' => 'Nombre obligatorio',
            'nombreCliente.min' => 'El nombre del Cliente minimo de 2 caractres',
            'nombreCliente.max' => 'El nombre del Cliente maximo de 50 caractres',


            'fecha.required' => 'Fecha Obligatoria',
            
            'user_id.required' => 'Usuario Obligatorio',

        ];
    }
}
