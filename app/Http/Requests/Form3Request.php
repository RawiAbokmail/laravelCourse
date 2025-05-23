<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form3Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        //  'name' => 'required|string|min:3|max:20',
        //     'email' => 'required|email',
        //     'age' => 'required'
        ];
    }

// public function messages()
//     {
//         return [
//             'name.required' => 'أدخل اسمك',
//             'name.min' => 'اسمك يجب أن يكون على الأقل 3 أحرف',
//             'name.max' => 'اسمك يجب أن يكون على الأكثر 20 حرف',
//             'email.required' => 'أدخل البريد الإلكتروني',
//             'age.required' => 'أدخل العمر',
//         ];
//     }

}
