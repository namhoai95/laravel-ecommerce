<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class AdminAddProductRequest  extends Request
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
            'name' => 'required|unique:san_pham,ten_san_pham',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,jpe,bmp,png|max:5120',
            'number' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm này đã có',
            'price.required' => 'Giá không được để trống',
            'image.required' => 'Vui lòng chọn hình ảnh',
            'image.mimes' => 'Vùi lòng chọn hình ảnh có dạng jpeg,jpg,jpe,bmg,png',
            'image.max' => 'Hình ảnh không được quá 5MB',
            'number.required' => 'Số lượng không được để trống',
        ];
    }
}
