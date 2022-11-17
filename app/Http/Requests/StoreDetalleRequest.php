<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class StoreDetalleRequest extends FormRequest
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
            
            "descripcion" => 'required|min:5|max:50',
            "prenda_id" => 'required',
            "factura_id" => 'required'

        ];
    }

    public function messages()
    {
        return [
            
            'descripcion.required' => 'Descripcion obligatorio',
            'descripcion.min' => 'La descripcion de la prenda minimo de 5 caractres',
            'descripcion.max' => 'La descripcion de la prenda maximo de 50 caractres',
           

            'prenda_id.required' => 'Prenda Obligatoria',

            'factura.required' => 'Factura Obligatoria' 

           
        ];
    }
}
