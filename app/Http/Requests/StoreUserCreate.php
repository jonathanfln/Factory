<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserCreate extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:8|max:25|confirmed',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nom requis',
            'name.max' => 'Maximum :max caractères',
            'email.required'  => 'Email requis',
            'email.email'  => 'Mauvais',
            'email.unique'  => 'Cette adresse a déjà été utilisée',
            'email.max'  => 'Maximum :max caractères',
            'password.required'  => 'Mot de passe requis',
            'password.min'  => 'Minimum :min caractères',
            'password.max'  => 'Maximum :max caractères',
            'password.confirmed'  => 'Le mot de passe ne correspond pas',
        ];
    }


}
