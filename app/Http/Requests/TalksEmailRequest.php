<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalksEmailRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'talk_theme' => 'required|string',
            'message' => 'required|string',
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
            'email' => 'O campo deve ser do tipo email',
        ];
    }
}