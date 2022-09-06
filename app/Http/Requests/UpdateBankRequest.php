<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBankRequest extends FormRequest
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
            'agency' => 'required|string',
            'account' => 'required|string',
            'code' => 'required|numeric',
            'name' => 'required|string',
            'document_type' => 'required|string',
            'document_value' => 'required|numeric',
            'image' => 'required_without:image_id|file|mimes:jpg,png',
            'image_id' => 'required_without:image'
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
            'url' => 'O campo deve conter um link válido',
            'file' => 'O arquivo deve ser válido',
            'mimes' => 'O arquivo deve ser do tipo PNG',
        ];
    }
}