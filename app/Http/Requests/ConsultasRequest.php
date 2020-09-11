<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname' => 'required',
            'rinic' => 'required',
            'rfin' => 'required',
            'idemp' => 'required',
            'mySelect' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'El :attribute es obligatorio.',
            'rinic.required' => 'El :attribute es requerido',
            'rfin.required' => 'El  :attribute es requerido',
            'idemp.required' => 'El  :attribute es obligatorio.',
            'mySelect.required' => 'Debes seleccionar una opcion :attribute'
        ];
    
        
    }
    
        
    public function attributes()
    {
        return [
            'fname' => 'nombre del usuario',
            'rinic' => 'rango inicial',
            'rfin' => 'rango final',
            'idemp' => 'identificador del empleado',
            'mySelect' => 'tipo de consulta',
        ];
    }
}
