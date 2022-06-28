<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
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


            'email'=>'required|email',
            'general.*.title'=>'required',
            'general.*.address1'=>'required',
            'general.*.meta_desc'=>'required|min:8|max:255',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'email.required' => 'the email is required',
            'general.*.title.required' => 'the title is required',
            'general.*.address1.required' => 'the address is required',
            'general.*.meta_desc.required' => 'the description is required',
            'general.*.meta_desc.min' => 'Your general\'s description  Is Too Short',

        ];
    }
}
