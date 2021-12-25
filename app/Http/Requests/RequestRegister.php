<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
class RequestRegister extends FormRequest

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
            'email' => 'required|max:190|min:3|unique:users,email,'.$this->id,
            'name' => 'required',
            
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return[
           

            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email trùng lặp',

            'name.required' => 'Tên không được để trống',
            
            'password.required' => 'Password không được để trống',
            // 'password.min' => 'Password không được dưới 3 ký tự',
            // 'password.max' => 'Password không được trên 25 ký tự',
        ];
    }
}
