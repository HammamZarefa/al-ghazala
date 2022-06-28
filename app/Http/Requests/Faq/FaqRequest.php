<?php

namespace App\Http\Requests\Faq;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Banner\Banner;

class FaqRequest extends FormRequest
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
//            'faq.*'=>'required',
            'question_en' => 'required',
            'answer_en'=>'required|min:8|max:255',
            'question_ar' => 'required',
            'answer_ar'=>'required|min:8|max:255',
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'faq.*.question.required' => 'the question is required',
            'faq.*.answer.required' => 'the answer is required',
            'faq.*.answer.min' => 'Your faq\'s answer  Is Too Short',

        ];
    }
}
