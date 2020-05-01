<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidation extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'tags'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A :attribute is required it something short form of your thoughts',
            'description.required' => 'A message is required. it detailly describe your thoughts',
            
            'tags.required' => 'Minimum one tag is required',
        ];
    }
}
