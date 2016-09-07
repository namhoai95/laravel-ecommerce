<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class AdminAddCategoryRequest extends Request
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
            'name' => 'required|unique:loai_san_pham,ten_loai',
            'position' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên chủng loại không được để trống',
            'name.unique' => 'Tên chủng loại đã tồn tại',
            'position.required' => 'Thứ tự không được để trống'
        ];
    }
}
