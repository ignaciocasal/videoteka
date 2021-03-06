<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'max:60|required',
            'availables' => 'integer|min:0|required',
            'poster' => 'nullable|url',
            'trailer' => 'nullable|url',
            'parental_guide_id' => 'required',
        ];
    }
}
