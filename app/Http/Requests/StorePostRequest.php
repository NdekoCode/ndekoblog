<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string|max:250|unique:posts',
            'content' => 'required|string|unique:posts',
            'image' => 'required|image',
            'category' => 'required|exists:categories,id'
        ];
    }
    protected function prepareForValidation()
    {

        // $this fait directement reference à la request()
        // Si l'image n'est pas definis ou si elle est vide alors retire là de la requete
        if (empty($this->image)) {
            $this->request->remove('image');
        }
    }
}
