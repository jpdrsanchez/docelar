<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|string',
            'introduction' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required_without:image_id|file|mimes:jpg,png',
            'image_id' => 'required_without:image|numeric'
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
            'date' => 'O campo deve conter uma data válida',
            'image.file' => 'O arquivo deve ser válido',
            'image.mimes' => 'O arquivo deve ser do tipo jpg ou png',
        ];
    }
}