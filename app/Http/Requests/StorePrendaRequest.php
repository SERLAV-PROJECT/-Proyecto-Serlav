<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePrendaRequest extends FormRequest
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

        $rule = '';
        if(request()->method != "PUT") {
            $rule = 'required|';
        }

        return [
            "nombrePrenda" => 'required|min:4|max:50',
            "tipoTela" => 'required|min:4|max:50',
            "color" => 'required|min:4|max:25',
            "cantidad" => 'required|min:1|max:20|numeric',
        ];
    }

    public function messages()
    {
        return [

            'nombrePrenda.required' => 'Nombre obligatorio',
            'nombrePrenda.min' => 'El nombre de la prenda minimo de 4 caractres',
            'nombrePrenda.max' => 'El nombre de la prenda maximo de 50 caractres',

            'tipoTela.required' => 'Campo obligatorio',
            'tipoTela.min' => 'El tipo de tela minimo de 4 caractres',
            'tipoTela.max' => 'El tipo de tela maximo de 50 caractres',

            'color.required' => 'Color obligatorio',
            'color.min' => 'El color de la prenda minimo 4 carcteres',
            'color.max' => 'El color de la prenda maximo 25 carcteres',


            'cantidad.required' => 'Cantidad obligatorio',
            'cantidad.max' => 'El número máximo es 20',
            'cantidad.min' => 'El número minimo es 1',

        ];

    }



}
