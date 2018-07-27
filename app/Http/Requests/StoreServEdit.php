<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServEdit extends FormRequest
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
            'name' => 'required|max:45|unique:services,name,'.$this->service->id,
            'logo' => 'required|max:45',
            'description' => 'max:100'
        ];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function messages()
    {
        return [
            'name.required' => "Il faut impérativement un nom pour le service",
            'name.max' => 'Maximum :max caractères',
            'name.unique' => 'Ce service existe déjà',
            'logo.required' => 'Il faut impérativement un nom pour le service',
            'logo.max' => 'Maximum :max caractères',
            'description.max' => 'Maximum :max caractères',
        ];
    }
}
