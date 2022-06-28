<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Banner\Banner;

class CategoryRequest extends FormRequest
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
//            'category.*'=>'required',
            'name_en' => 'required',
            'keyword_en' => 'required',
            'meta_desc_en'=>'required|min:5|max:255',
            'name_ar' => 'required',
            'keyword_ar' => 'required',
            'meta_desc_ar'=>'required|min:5|max:255',
        ];
    }
    public function messages()
    {
        return [

            'category.*.name.required' => 'the name is required',
            'category.*.keyword.required' => 'the keyword is required',
            'category.*.meta_desc.required' => 'the description is required',
            'category.*.meta_desc.min' => 'Your categorie\'s description  Is Too Short',

        ];
    }
}
