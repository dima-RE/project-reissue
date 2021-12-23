<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Det_VentasRequest extends FormRequest
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
            'cod_producto' => 'required',
            'cantidad' => 'required',
            'precio_venta' => 'lte:1000000',
            'estado' => 'boolean',
        ];
    }

    public function messages(){
        return[
            'cod_producto.required' => 'Debe ingresar el código del producto.',
            'cantidad' => 'Debe ingresar la cantidad del producto.',
            'precio_venta' => 'El valor es mayor a 1.000.000.',
            'estado' => 'El valor debe ser 0 (Anulado) o 1 (Vigente).',
        ];
    }
}
