<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatgoryRequest extends FormRequest
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
            'name' => 'required|string|max:30',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ];
    }
}