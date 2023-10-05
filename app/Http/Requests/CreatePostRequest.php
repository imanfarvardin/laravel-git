<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required' , 'max:20' , new Uppercase()],
            'description' => 'required',
            'file' => ['required','max:1000', 'mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'لطفا عنوان مطلب مورد نظر خود را انتخاب کنید ',
            'title.max' => ' تعداد کاراکترهای عنوان شما باید بیش از 2 کاراکتر باشد  ',
            'description.required' => ' لطفا توضیحات مطلب مورد نظر خود را وارد کنید  ',
            'file.required'=>'لطفا تصویر اصلی این مطلب را مشخص کنید ',
            'file.max'=>' حجم تصویر شما نباید بیش از 1 مگابایت باشد ',
            'file.mimes'=>' نوع تصویر شما باید jpg یا png باشد  '
        ];
    }
}
