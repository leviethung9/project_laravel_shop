<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSizeRequest extends FormRequest
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
            'size_name' => 'required|unique:size,size_name|max:10|min:1',
            'size_name' => 'digits_between:1,100'
       ];
    }

    public function messages()
    {
        return[
            'size_name.required' => 'Size không được để trống',
            'size_name.unique' => 'Size đã tồn tại',
            'size_name.min' => 'Size tối thiểu 1 ký tự',
            'size_name.max' => 'Size tối đa 10 ký tự',
            'size_name.digits_between' => 'Size nằm trong khoảng từ 1 - 100',
        ];
    }
}
