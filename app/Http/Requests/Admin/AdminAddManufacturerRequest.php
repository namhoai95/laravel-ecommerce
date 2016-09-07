<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class AdminAddManufacturerRequest extends Request
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
            'name' => 'required|unique:thuong_hieu,ten_thuong_hieu',
            'position' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên thương hiệu không được để trống',
            'name.unique' => 'Tên thương hiệu đã tồn tại',
            'position.required' => 'Thứ tự không được để trống'
        ];
    }
}
