<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocalesRequest extends FormRequest
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
            'id_local' => 'required|unique:locales,id_local|gte:11|lte:12',
            'nom_local' => 'required|string|lte:50',
            'giro' => 'required|string|lte:100',
            'dir_local' => 'required|lte:200',
        ];
    }

    public function messages(){
        return[
            'id_local.required' => 'Debe ingresar el rut del local.',
            'id_local.unique' => 'El local ya existe.',
            'id_local.gte' => 'El rut esta mal ingresado. Revise puntuación, guión y dígitos.',
            'id_local.lte' => 'El rut esta mal ingresado. Revise puntuación, guión y dígitos.',
            'nom_local.required' => 'Debe ingresar el nombre del local.',
            'nom_local.string' => 'El nombre debe ser un texto.',
            'nom_local.lte' => 'El nombre supera los 50 carácteres.',
            'giro.required' => 'Debe ingresar el giro del local.',
            'giro.string' => 'El giro debe ser texto.',
            'giro.lte' => 'El giro supera los 100 carácteres.',
            'dir_local.required' => 'Debe ingresar la dirección del local.',
            'dir_local.lte' => 'La dirección supera los 200 carácteres.',
        ];
    }
}
