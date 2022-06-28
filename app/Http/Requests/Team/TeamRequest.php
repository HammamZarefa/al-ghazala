<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Team\Team;
use App\Models\Team\TeamTranslation;

class TeamRequest extends FormRequest
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
            'position'=>'required|min:3|max:255',
            'qoute'=>'required|min:3|max:255',
            'photo' => 'required'
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'team.*.name.required' => 'the name is required',
            'team.*.position.min' => 'Your team position\'s Is Too Short',
            'team.*.position.max' => 'Your team position\'s Is Too Short',
            'team.*.qoute.min' => 'Your team qoute\'s Is Too Long',
            'team.*.qoute.max' => 'Your team qoute\'s Is Too Long',

        ];
    }
}
