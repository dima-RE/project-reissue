<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresasRequest extends FormRequest
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
            'id_empresa' => 'required|unique:empresas,id_empresa|gte:11|lte:12',
            'nom_empresa' => 'required|lte:200',
            'dir_empresa' => 'required|lte:200',
            'fono_empresa' => 'required|lte:12',
            'email_empresa' => 'required|email|lte:100',
            'estado' => 'boolean',
        ];
    }

    public function messages(){
        return [
            'id_empresa.required' => 'Debe ingresar el rut de la empresa.',
            'id_empresa.unique' => 'La empresa ya existe.',
            'id_empresa.gte' => 'El rut esta mal ingresado. Revise puntuación, guión y dígitos.',
            'id_empresa.lte' => 'El rut esta mal ingresado. Revise puntuación, guión y dígitos.',
            'nom_empresa.required' => 'Debe ingresar el nombre de la empresa',
            'nom_empresa.lte' => 'El nombre supera los 200 carácteres.',
            'dir_empresa.required' => 'Debe ingresar la dirección de la empresa.',
            'dir_empresa.lte' => 'La dirección supera los 200 carácteres.',
            'fono_empresa.required' => 'Debe ingresar el teléfono de la empresa.',
            'fono_empresa.lte' => 'El número telefónico esta mal ingresado. Revise que estén +56 y el resto de dígitos.',
            'email_empresa.required' => 'Debe ingresar el correo de la empresa',
            'email_empresa.email' => 'No cumple con el formato de correo.',
            'email_empresa.lte' => 'El correo supera los 100 carácteres.',
            'estado.boolean' => 'El valor debe ser 0 (anulado) o 1 (vigente).',
        ];
    }
}
