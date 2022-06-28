<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
//            'cover'=>'required',
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'partner.*.name.required' => 'the name is required',
            'cover.required' => 'the image is required',

        ];
    }
}
