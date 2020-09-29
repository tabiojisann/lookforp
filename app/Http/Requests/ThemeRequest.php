<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemeRequest extends FormRequest
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
            'title' => ['required', 'max:100'],
            'image' => ['nullable', 'file', 'image', 'mimes:jpeg,png,jpg','max:1000'],
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'お題',
            'image' => '画像',
        ];
    }
}
