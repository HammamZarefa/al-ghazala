<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Banner\Banner;

class BannerRequest extends FormRequest
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
//
//            'banner.*'=>'required',
//            'banner.title' => 'required',
//            'banner.desc'=>'required|min:8|max:255',
//            'cover' => 'required'
        ];
    }
    public function messages()
    {
        return [

//            'banner.title.required' => 'the title is required',
//            'banner.desc.required' => 'the description is required',
//            'banner.desc.min' => 'Your Banner\'s description  Is Too Short',
//            'cover.required' => 'the image is required',
        ];
    }
}
