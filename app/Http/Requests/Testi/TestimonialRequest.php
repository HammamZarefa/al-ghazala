<?php

namespace App\Http\Requests\Testi;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name'=>'required',
            'photo'=>'required',
            'desc'=>'required|min:8|max:255',
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'desc.min' => 'Your Portfolio\'s description  Is Too Short',
        ];
    }
}
