<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'price' => 'integer',
            'status' => 'required|string|max:255',
            'birthday' => 'required|date',
            'weight' => 'required|integer',
            'height' => 'integer',
            'images.*' => 'mimes:jpeg,jpg,png,gif'

        ];
    }

    public function messages()
    {
        return [
            'images.required' => 'Please upload at least one image',
            'images.*.mimes' => 'Please upload image only',
        ];
    }
}
