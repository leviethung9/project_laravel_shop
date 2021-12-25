<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminColorRequest extends FormRequest
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
            'color_name' => 'required|unique:color,color_name|max:30|min:3',
        ];
    }

    public function messages()
    {
        return[
            'color_name.required' => 'Tên màu không được để trống',
            'color_name.uniqued' => 'Tên màu đã tồn tại',
            'color_name.min' => 'Tên màu tối thiểu 3 ký tự',
            'color_name.max' => 'Tên màu tối đa 30 ký tự',
        ];
    }
}
