<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostRequest extends FormRequest
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
            'p_title' => 'required|unique:post,p_title|max:200|min:3',

            'p_cate' => 'required|:post,p_cate',

            'p_avatar' => 'required|:post,p_avatar',

            'p_content' => 'required|:post,p_content',
        ];
    }

    public function messages()
    {
        return[
            'p_title.required' => 'Tiêu đề không được để trống',
            'p_title.unique' => 'Tiêu đề đã tồn tại',
            'p_title.min' => 'Tiêu đề tối thiểu 3 ký tự',
            'p_title.max' => 'Tiêu đề tối đa 200 ký tự',

            'p_cate.required' => 'Chuyên mục không được để trống',
            'p_avatar.required' => 'Hình ảnh không được để trống',
            'p_content.required' => 'Nội dung không được để trống',
        ];
    }
}
