<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdateBannerRequest extends FormRequest
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
            'description' => 'required|string',
            'link' => 'required|string|url',
            'button_text' => 'required|string',
            'type' => [new Enum(BannerTypes::class), 'required'],
            'image' => 'file|mimes:png',
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
            'image.file' => 'O arquivo deve ser válido',
            'image.mimes' => 'O arquivo deve ser do tipo PNG',
        ];
    }
}