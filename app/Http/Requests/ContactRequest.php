<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'  => ['required', 'max:12'],
            'email' => ['required', 'string', 'email' => 'email:strict,dns', 'max:255'],
            'text'  => ['required'],
        ];
    }

    public function attributes()
    {
        return [
            'name'  => 'お名前',
            'email' => 'メールアドレス',
            'tesxt' => 'お問い合わせ内容',
        ];

    }
}
