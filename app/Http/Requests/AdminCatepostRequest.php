<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCatepostRequest extends FormRequest
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
            'cate_post_title' => 'required|unique:cate_post,cate_post_title|max:50|min:3',
        ];
    }

    public function messages()
    {
        return[
            'cate_post_title.required' => 'Tên chuyên mục không được để trống',
            'cate_post_title.unique' => 'Tên chuyên mục đã tồn tại',
            'cate_post_title.min' => 'Tên chuyên mục tối thiểu 3 ký tự',
            'cate_post_title.max' => 'Tên chuyên mục tối đa 50 ký tự',
        ];
    }
}
