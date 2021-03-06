<?php

namespace App\Http\Requests\Role;

use App\Role;

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
            'role' => 'required|numeric',
            'name' => 'required|unique:roles|max:255',
            'dob' => 'required',
            'email' => ' required',
            'password' => 'required|string|email|maxx:255|unique:users',            
            
            //
        ];
    }

    public function messages()
    {
        return[
            'role.required'      => 'Este valor es requerido',
            'role.numeric'       => 'Este valor no es correcto',
            'name.required'      => 'Este campo es requerido',
            'name.string'        => 'required',
            'name.max'           => 'required|string|email|maxx:255|unique:users',
            'dob.required'       => 'Este campo es requerido',
            'email.required'     => 'Este campo es requerido',
            'email.string'       => 'Este campo es requerido',
            'email.max'          => 'Este campo es requerido',
            'email.unique'       => 'Este campo es requerido',
            'password.required'  => 'Este campo es requerido',
            'password.string'    => 'Este campo es requerido'
            
        ];
    }
}
