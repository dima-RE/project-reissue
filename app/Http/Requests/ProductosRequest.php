<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
            'cod_producto' => 'required|unique:productos,cod_productos|integer',
            'nom_producto' => 'required|lte:100',
            'cod_categoria' => 'required',
            'id_empresa' => 'required',
            'precio' => 'required|gte:10|lte:100000',
            'stock_critico' => 'required|gt:0|lt:100',
            'stock' => 'required|lte:1000',
            'estado' => 'boolean',
        ];
    }

    public function messages(){
        return[
            'cod_producto.required' => 'Debe ingresar el código del producto.',
            'cod_producto.unique' => 'El producto ya existe.',
            'cod_producto.integer' => 'El código del producto debe ser numérico.',
            'nom_producto.required' => 'Debe ingresar el nombre del producto.',
            'nom_producto.lte' => 'El nombre supera los 100 carácteres.',
            'cod_categoria.required' => 'Debe elegir la categoría.',
            'id_empresa.required' => 'Debe elegir la empresa.',
            'precio.required' => 'Debe ingresar el precio del producto.',
            'precio.gte' => 'El precio no puede ser menor a 10.',
            'precio.lte' => 'El precio no puede ser mayor a 100.000.',
            'stock_critico.required' => 'Debe ingresar el límite del stock crítico.',
            'stock_critico.gt' => 'El límite no puede ser 0.',
            'stock_critico.lt' => 'El límite no puede ser mayor a 100.',
            'stock.required' => 'Debe ingresar la cantidad de stock del producto.',
            'stock.lte' => 'El número del stock no puede ser mayor a 1.000.',
            'estado.boolean' => 'El valor debe ser 0 (Anulado) o 1 (Vigente).',
        ];
    }
}
