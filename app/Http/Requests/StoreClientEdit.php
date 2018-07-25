<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientEdit extends FormRequest
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
            'name' => 'required|max:45',
            'company' => 'required|max:45',
            'image' => 'max:20000000|image|dimensions:width=120,height=120'
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
            'name.required' => "Il faut impérativement un nom pour le client",
            'company.required' => "Il faut impérativement un nom de société",
            'name.max' => 'Maximum :max caractères',
            'company.max' => 'Maximum :max caractères',
            'image.max' => 'Maximum :max caractères',
            'image.image' => 'Le fichier doit être une image',
            'image.dimensions' => "L'image doit faire 120x120",
        ];
    }
}
