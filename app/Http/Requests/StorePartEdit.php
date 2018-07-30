<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartEdit extends FormRequest
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
            'name' => 'required|max:45|unique:tags,name,'.$this->tag->id,
            'image' => 'image',
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
            'name.required' => "Nom d'image requis",
            'name.unique' => 'Ce nom existe déjà',
            'name.max' => 'Maximum :max caractères',
            'image.required' => "Image requise",
            'image.image' => 'Le fichier doit être une image',
        ];
    }
}
