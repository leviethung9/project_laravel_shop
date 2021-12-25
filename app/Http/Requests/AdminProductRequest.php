<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductRequest extends FormRequest
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
            'pro_name' => 'required|unique:product,pro_name|max:100|min:3',
            'pro_name_cate' => 'required|:product,pro_name_cate',
            'pro_price' => 'required|min:1',
            'pro_price_sale' => 'required|min:1',
            // 'pro_avatar' => 'required|mimetypes:image/jpeg,image/png,image/jpg|max:3000',
            'pro_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'pro_total' => 'required|',
            'pro_desc' => 'required|max:255|min:3',
            'pro_detail' => 'required|max:255|min:3',
            'pro_color' => 'required|',
            'pro_size' => 'required|',
            'pro_tag' => 'required|',
        ];
    }

    public function messages()
    {
        return[
            'pro_name.required' => 'Tên sản phẩm không được để trống',
            'pro_name.unique' => 'Tên sản phẩm đã tồn tại',
            'pro_name.min' => 'Tên sản phẩm tối thiểu 3 ký tự',
            'pro_name.max' => 'Tên sản phẩm tối đa 50 ký tự',

            'pro_price.required' => 'Giá không được để trống',
            'pro_price_sale.required' => 'Giá khuyến mại không được để trống',
            'pro_name_cate.required' => 'Danh mục không được để trống',

            'pro_avatar.required' => 'Hình ảnh không được để trống và phải đúng định dạng',

            'pro_total.required' => 'Số lượng không được để trống',
            'pro_desc.required' => 'Mô tả không được để trống và dưới 255 ký tự',
            'pro_desc.max' => 'Mô tả không được quá 255 ký tự',
            'pro_desc.min' => 'Mô tả không được dưới 3 ký tự',
            'pro_detail.required' => 'Chi tiết không được để trống và dưới 255 ký tự',
            'pro_detail.max' => 'Chi tiếtkhông được quá 255 ký tự',
            'pro_detail.min' => 'Chi tiết không được dưới 3 ký tự',
            'pro_tag.required' => 'Từ khóa không được để trống',
            'pro_color.required' => 'Màu sắc không được để trống',
            'pro_size.required' => 'Size không được để trống',
        ];
    }
}
