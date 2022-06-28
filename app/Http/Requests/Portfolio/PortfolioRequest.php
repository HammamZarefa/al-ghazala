<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'name_en'=>'required',
            'name_ar'=>'required',
            'desc_en'=>'required|min:8|max:255',
            'desc_ar'=>'required|min:8|max:255',
            'client_en'=>'required',
            'client_ar'=>'required',
            'category'=>'required',
////            'mobileImage'=>'required',
//            'cover'=>'required',
            'date'=>'required',
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'desc_en.min' => 'Your Portfolio\'s description  Is Too Short',
            'desc_ar.min' => 'Your Portfolio\'s description  Is Too Short',
            'category' => 'Your Portfolio\'s pcategory is required array',
            'category.required' => 'Your Portfolio\'s pcategory is required',
            'name_en.required' => 'the name is required',
            'name_ar.required' => 'the name is required',
            'desc_en.required' => 'the description is required',
            'desc_ar.required' => 'the description is required',
            'client_en.required' => 'the client is required',
            'client_ar.required' => 'the client is required'
        ];
    }
}
