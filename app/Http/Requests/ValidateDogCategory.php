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
            'name.required' => 'Bạn cần tên danh mục ',
            'name.required.min'=> 'Tối thiểu 3 kí tự',
            'name.required.max'=> 'Tối thiểu 100 kí tự',
            'thumbnail[].required' => 'Hãy chọn ít nhất 1 bức ảnh  ',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator){
            if($this->get('breedType') == 0){
                $validator->errors()->add('breedType', 'Vui lòng chọn giống chó!');
            }
        });
    }
}
