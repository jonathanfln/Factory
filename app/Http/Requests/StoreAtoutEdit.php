<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAtoutEdit extends FormRequest
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
            'name' => 'required|max:45|unique:categories,name,'.$this->atout->id,
            'content' => 'required|max:255',
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
            'name.required' => "Nom de l'atout requis",
            'name.unique' => 'Cet atout existe déjà',
            'name.max' => 'Maximum :max caractères',
            'content.required' => "Il faut une description pour l'atout",
            'content.max' => 'Maximum :max caractères',
        ];
    }
}
