<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditPasswordRequest extends Request
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
            'password' => 'required|min:6',
            'newpassword' => 'required|min:6',
            'renewpassword' => 'required|min:6|same:newpassword'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
            'newpassword.required' => 'Vui lòng nhập mật khẩu mới',
            'newpassword.min' => 'Mật khẩu mới phải ít nhất 6 ký tự',
            'renewpassword.required' => 'Vui lòng nhập lại mật khẩu mới',
            'renewpassword.same' => 'Mật khẩu nhập lại mới không đúng',
            'renewpassword.min' => 'Mật khẩu nhập lại phải ít nhất 6 ký tự',
        ];
    }
}
