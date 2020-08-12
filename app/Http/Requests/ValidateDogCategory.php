<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDogCategory extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'thumbnail[]'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Bạn cần nhập tiêu đề ',
            'title.required.min'=> 'Tối thiểu 3 kí tự',
            'title.required.max'=> 'Tối thiểu 100 kí tự',
            'thumbnail[].required' => 'Hãy chọn ít nhất 1 bức ảnh  ',
        ];
    }
}
