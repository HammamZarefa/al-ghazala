<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'about.*.title'=>'required',
            'about.*.subject'=>'required',
            'about.*.desc'=>'required|min:8|max:255',
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'about.*.title.required' => 'the title is required',
            'about.*.subject.required' => 'the subject is required',
            'about.*.desc.required' => 'the description is required',
            'about.*.desc.min' => 'Your about\'s description  Is Too Short',

        ];
    }
}
