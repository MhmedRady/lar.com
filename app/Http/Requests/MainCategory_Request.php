<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategory_Request extends FormRequest
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
            "Category"=>"required|array|min:1",
            "Category.*.name"=>"required",
            "Category.*.abbr"=>"required|max:10",
            "photo"=>"required_without:id|mimes:jpg,jpeg,png|file|max:4480",
//            "active"=>"required"
//            "translation_lang"=>"required|max:10",
//            "name"=>"required|max:150|unique:main_categories,name". ($this->id ? ",$this->id" : ''),
//            "Category.*.active"=>"required",
        ];
    }

    public function messages()
    {
        return [
            "required"=>__("Messages.req"),
            "mimes"=>"امتداد الملف المدخل غير صحيح",
            "unique"=>"هذا القسم موجود مسبقاً",
            "photo.max"=>"مساحة الصوره يجب الا تزيد عن 20MB",
            "max"=> "error",
            "translation_lang.max"=>"more error"
        ];
    }
}
