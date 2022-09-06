<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UpdateAboutPageRequest extends FormRequest
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
            'title_seo' => 'required|string',
            'description_seo' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string',
            'image_one' => [
                'file',
                'mimes:png,jpg',
            ],
            'image_two' => [
                'file',
                'mimes:png,jpg',
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'string' => 'O campo deve ser do tipo string',
            'required' => 'O campo não pode estar vazio',
            'file' => 'O arquivo deve ser válido',
            'mimes' => 'O arquivo deve ser do tipo PNG ou JPG',
        ];
    }
}