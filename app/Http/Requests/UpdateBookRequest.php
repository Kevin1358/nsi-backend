<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->method() == 'PUT'){
            return [
                'isbn'=>['required'],
                'title'=>['required'],
                'subtitle'=>['nullable'],
                'author'=>['nullable'],
                'published'=>['nullable'],
                'publisher'=>['nullable'],
                'pages'=>['nullable'],
                'description'=>['nullable'],
                'website'=>['nullable'],
            ];
        }else{
            return [
                'isbn'=>['sometimes','required'],
                'title'=>['sometimes','required'],
                'subtitle'=>['sometimes','nullable'],
                'author'=>['sometimes','nullable'],
                'published'=>['sometimes','nullable'],
                'publisher'=>['sometimes','nullable'],
                'pages'=>['sometimes','nullable'],
                'description'=>['nullable'],
                'website'=>['sometimes','nullable'],
            ];
        }
        
    }
}
