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
            "valorTotal"  => 'required|min:4500|max:15000|numeric',
            
        ];
    }

    public function messages()
    {
        return [
            
            'nombreCliente.required' => 'Nombre obligatorio',
            'nombreCliente.min' => 'El nombre del Cliente minimo de 2 caractres',
            'nombreCliente.max' => 'El nombre del Cliente maximo de 50 caractres',


            'fecha.required' => 'Fecha Obligatoria',
        
            'valorTotal.required' => 'Valor obligatorio',
            'valorTotal.max' => 'El valor máximo es 15000',
            'valorTotal.min' => 'El valor minimo es 4500',


            
            'user_id.required' => 'Usuario Obligatorio',

            'estado.required' => 'Campo Obligatorio',
            'estado.in' =>'Paga,Pendiente,Vencida'

        ];
    }
}
