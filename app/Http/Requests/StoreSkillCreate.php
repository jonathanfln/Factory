<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkillCreate extends FormRequest
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
            'name' => 'required|max:45|unique:skills,name',
            'logo' => 'required|max:45|unique:skills,logo',
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
            'name.required' => 'Nom de skill requis',
            'name.unique' => 'Ce tag existe déjà',
            'name.max' => 'Maximum :max caractères',
            'logo.required' => 'Logo requis',
            'logo.unique' => 'Ce logo existe déjà',
            'logo.max' => 'Maximum :max caractères',
        ];
    }
}
