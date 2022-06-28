<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title_en'=>'required',
            'title_ar'=>'required',
//            'icon'=>'required',
            'desc_en'=>'required|min:8|max:255',
            'desc_ar'=>'required|min:8|max:255'
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'service.*.desc.min' => 'Your Service\'s description  Is Too Short',
            'service.*.title.required' => 'the title is required',
            'service.*.desc.required' => 'the description is required',
            'icon' =>  'the image is required',
        ];
    }
}
