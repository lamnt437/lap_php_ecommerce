<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuggestPost extends FormRequest
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
            'product_name' => 'required|string|max:100',
            'product_price' => 'required|numeric',
            'product_description' => 'required|string|max:255',
            'image' => 'image|mines:jpeg, jpg, png|max:2048',
        ];
    }
}
