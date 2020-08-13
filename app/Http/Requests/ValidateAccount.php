<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAccount extends FormRequest
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
            'user_name' => 'required|min:3|max:100',
            'password' => 'required|min:6|max:30',
            'email' => 'required|max:100',
            'full_name' => 'required',
            'address' => 'required|max:300',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Bạn cần nhập tài khoản ',
            'user_name.required.min'=>'Tối thiểu là 3 kí tự',
            'user_name.required.max'=>'Tối đa là 100 kí tự',
            'password.required.min' => 'Tối thiểu 6 kí tự',
            'password.required.max' => 'Tối đa 30 kí tự',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required.max' => 'Tối đa 100 kí tự',
            'email.required' => 'Bạn cần nhập email như : a@gmail.com',
            'full_name.required.' => 'Hãy nhập tên đầy đủ của bạn',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'address.required.max' => 'Tối đa 300 kí tự',
            'phone.required' => 'Hãy nhập số điện thoại ',
        ];
    }
}
