<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdadateRequest extends FormRequest
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
            'name' => 'required|unique:roles,name,'.$this->route('role')->id.'|max:255', //$this->route('role')->id. Trae el objeto completo a editar

            'description' => 'required '
            //
        ];
    }

    public function messages()
    {
        return[
            'name.required' => '* El campo Nombre es requerido',
            'name.unique' => ' Este nombre ya esta ocupado',
            'description.required' => '* El campo Descripción es requerido'
        ];
    } 
}
