<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class AdminAddUserRequest extends Request
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
            'name' => 'required',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password|min:6',
            'phone' => 'required',
            'email' => 'required|unique:users,email|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập họ tên',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
            'repassword.min' => 'Mật khẩu nhập lại phải ít nhất 6 ký tự',
            'repassword.required' => 'Vui lòng nhập lại mật khẩu',
            'repassword.same' => 'Mật khẩu nhập lại không đúng',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email này đã tồn tại',
            'email.regex' => 'Email không đúng định dạng',
            'phone.required' => 'Vui lòng nhập số điện thoại'
        ];
    }
}
