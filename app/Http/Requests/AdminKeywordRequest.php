<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminKeywordRequest extends FormRequest
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
             'k_name' => 'required|unique:keyword,k_name|max:50|min:3'
        ];
    }

    public function messages()
    {
        return[
            'k_name.required' => 'Tên từ khóa không được để trống',
            'k_name.uniqued' => 'Tên từ khóa đã tồn tại',
            'k_name.min' => 'Tên từ khóa tối thiểu 3 ký tự',
            'k_name.max' => 'Tên từ khóa tối đa 50 ký tự',
        ];
    }
}

