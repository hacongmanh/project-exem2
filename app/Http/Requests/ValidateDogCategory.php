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

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn cần tên danh mục ',
            'name.required.min'=> 'Tối thiểu 3 kí tự',
            'name.required.max'=> 'Tối thiểu 100 kí tự',

        ];
    }
}
