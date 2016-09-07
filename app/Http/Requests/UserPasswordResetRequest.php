<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserPasswordResetRequest extends Request
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
            'email' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email',
            'email.regex' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
            'password_confirmation.min' => 'Mật khẩu nhập lại phải ít nhất 6 ký tự',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu',
            'password_confirmation.same' => 'Mật khẩu nhập lại không đúng'
        ];
    }
}
