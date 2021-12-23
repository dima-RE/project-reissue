<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
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
            'nom_categoria' => 'required|string|unique:categorias,nom_categoria|lte:50',
            'iva' => 'required|boolean',
        ];
    }

    public function messages(){
        return[
            'nom_categoria.required' => 'Debe ingresar el nombre de la categoría.',
            'nom_categoria.string' => 'El nombre debe ser solo texto.',
            'nom_categoria.unique' => 'La categoría ya existe.',
            'nom_categoria.lte' => 'El nombre supera los 50 carácteres.',
            'iva.required' => 'Debe definir si el I.V.A. afecta o no a la categoría.',
            'iva.boolean' => 'El valor debe ser 0 (No afecta) o 1 (Afecta).',
        ];
    }
}
