<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:roles|max:255',
            'role_id' => 'required|numeric ',
            'description' => 'required '
            //
        ];
    }

    public function messages()
    {
        return[
            'name.required' => '* El campo Nombre es requerido',
            'name.unique' => ' Este nombre ya esta ocupado',
            'description.required' => '* El campo Descripción es requerido',
            'role_id.required' => '* El campo de rol es requerido',
            'role_id.numeric' => 'El formato no es correcto'
        ];
    }
}
