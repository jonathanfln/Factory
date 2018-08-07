<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjCreate extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required',
            'clients_id' => 'required|integer|exists:clients,id',
            'categories_id' => 'required|integer|exists:categories,id',
            'tags_id' => 'required|exists:tags,id',
            'skills_id' => 'required|exists:skills,id',
            'image' => 'required|max:20000000|image|dimensions:min_width=1000',
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
            //
            'title.required' => "Il faut impérativement un nom pour l'article",
            'title.max' => 'Maximum :max caractères',
            'clients_id.required' => "Ce n'est pas bien d'essayer de tricher",
            'clients_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'clients_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'content.required' => "Il faut impérativement un contenu",
            'catégories_id.required' => "Ce n'est pas bien d'essayer de tricher",
            'catégories_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'catégories_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'tags_id.required' => 'Il faut au minimum un tag',
            'tags_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'skills_id.required' => 'Il faut au minimum un skill',
            'skills_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'image.required' => "Il faut impérativement une image",
            'image.max' => "L'image doit être au maximum de 20mB",
            'image.dimension' => "L'image doit être faire minimim 1000 pixels de large",
        ];
    }
}