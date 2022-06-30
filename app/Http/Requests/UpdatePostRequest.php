<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|string|max:250',
            'content' => 'required|string',
            'image' => 'image|sometimes',
            // La category doit exister dans la base de donnée dans la table 'categories' et sur la colonne 'id'
            'category' => 'required|exists:categories,id'
        ];
    }
}
