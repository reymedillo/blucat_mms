<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name' => 'required|max:255|unique:users',
            'email' => 'email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'address' => 'max:255',
            'tel' => 'max:20',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'password.required' => 'パスワードを入力してください。'
        ];
    }
}
