<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [           
            'name' => 'required|unique:roles|max:255',
            'dob' => 'required',
            'email' => ' required|string|email|max:255|inique:users',
                       
            
            //
        ];
    }

    public function messages()
    {
        return[
            
            'name.required'      => 'Este campo es requerido',
            'name.string'        => 'required',
            'name.max'           => 'required|string|email|maxx:255|unique:users',
            'dob.required'       => 'Este campo es requerido',
            'email.required'     => 'Este campo es requerido',
            'email.string'       => 'Este campo es requerido',
            'email.max'          => 'Este campo es requerido',
            'email.unique'       => 'Este campo es requerido',
            
            
        ];
    }
}
