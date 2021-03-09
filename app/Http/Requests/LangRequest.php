<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LangRequest extends FormRequest
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
            "name" => "required|max:20|string|unique:languages,name". ($this->id ? ",$this->id" : ''),
            "abbr" => "required|max:5|string|unique:languages,abbr" . ($this->id ? ",$this->id" : ''),
            "default" => "max:10",
            "direction" => "required|in:rtl,ltr",
            "active" => "in:0,1",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "اسم اللغه فارغ",
            "abbr.required" => "الاسم المختصر للغه فارغ",
            "string" => "البيانات المدخله غير صحيحه",
            "in" => "البيانات المدخله غير صحيحه",
            "direction.required" => "لم يتم تحديد اتجاه اللغه",
//            "active.required" => "لم يتم تحديد التفعيل للغه",
            "abbr.max" => "الاختصار لا يكون اكبر من 5 احرف",
        ];
    }
}
