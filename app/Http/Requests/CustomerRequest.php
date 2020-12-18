<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:50',
            'lastname' => 'required|max:50',
            'dni' => 'required|digits:8|unique:customers',
            'password' => 'required|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo obligatorio',
            'name.max' => 'Nombre demasiado largo',
            'lastname.required' => 'Campo obligatorio',
            'lastname.max' => 'Apellido demasiado largo',
            'dni.required' => 'Campo obligatorio',
            'dni.digits' => 'El DNI debe tener 8 digitos',
            'dni.unique' => 'El DNI ya esta registrado',
            'password.required' => 'Campo obligatorio',
            'password.confirmed' => 'Los campos no coinciden'

        ];
    }
}
