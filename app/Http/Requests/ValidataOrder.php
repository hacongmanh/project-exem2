<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidataOrder extends FormRequest
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
            'ship_name' => 'required|min:2|max:100',
            'ship_phone' => 'required|min:6|max:30',
            'ship_address' => 'required|max:500',
            'ship_email' => 'required|min:5|max:200',
            'notes' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'ship_name.required' => 'Bạn cần nhập tài khoản ',
            'ship_name.required.min'=>'Tối thiểu là 2 kí tự',
            'ship_name.required.max'=>'Tối đa là 100 kí tự',
            'ship_phone.required.max' => 'Tối đa 30 kí tự',
            'ship_phone.required.min' => 'Tối thiểu 6 kí tự',
            'ship_phone.required' => 'Bạn cần nhập số điện thoại',
            'ship_email.required.max' => 'Tối đa 100 kí tự',
            'ship_email.required' => 'Bạn cần nhập email như : a@gmail.com',
            'ship_email.required.min' => 'Tối thiểu 5 kí tự',
            'ship_address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'ship_address.required.max' => 'Tối đa 500 kí tự',
            'notes.required' => 'Hãy nhập ghi chú',
            'notes.required.max' => 'Tối đa 1000 kí tự',

        ];
    }
}
