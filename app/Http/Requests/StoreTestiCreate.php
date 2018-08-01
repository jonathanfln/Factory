<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestiCreate extends FormRequest
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
            'clients_id' => 'required|integer|exists:clients,id',
            'content' => 'required|max:255',
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
            'content.required' => "Il faut impérativement un avis",
            'content.max' => 'Maximum 150 caractères',
            'clients_id.required' => "Ce n'est pas bien d'essayer de tricher",
            'clients_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'clients_id.exists' => "Ce n'est pas bien d'essayer de tricher",
        ];
    }
}