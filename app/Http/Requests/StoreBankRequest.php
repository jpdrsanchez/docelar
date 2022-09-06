<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBankRequest extends FormRequest
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
}