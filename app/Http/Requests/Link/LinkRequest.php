<?php

namespace App\Http\Requests\Link;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
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
            'links.*.name'=>'required',
            'link'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'links.*.name.required' => 'the name is required',
            'link.required' => 'the link is required',

        ];
    }
}
