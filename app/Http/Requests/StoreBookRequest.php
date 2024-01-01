<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Client\Request;

class StoreBookRequest extends FormRequest
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
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id'=>$this->user()->id
        ]);
    }
}
