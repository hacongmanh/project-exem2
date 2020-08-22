<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateArticle extends FormRequest
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
            'title' => 'required|min:3|max:1000',
            'description'=>'required|min:10|max:5000',


        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Bạn cần nhập tiêu đề ',
            'title.required.min'=> 'Tối thiểu 3 kí tự',
            'title.required.max'=> 'Tối thiểu 1000 kí tự',
            'description.required.min'=> 'Tối thiểu 10 kí tự',
            'description.required.max'=> 'Tối thiểu 5000 kí tự',
            'description.required'=> 'Bạn chưa nhập nội dung ',

        ];
    }
}
