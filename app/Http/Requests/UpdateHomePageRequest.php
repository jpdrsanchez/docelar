<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomePageRequest extends FormRequest
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
            'about_title' => 'required|string',
            'about_description' => 'required|string',
            'projects_title' => 'required|string',
            'projects_description' => 'required|string',
            'talks_title' => 'required|string',
            'talks_description' => 'required|string',
            'donate_title' => 'required|string',
            'donate_description' => 'required|string',
            'schedule_title' => 'required|string',
            'schedule_description' => 'required|string',
            'schedule_weekdays_opening' => 'required|string',
            'schedule_weekeend_opening' => 'required|string',
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
        ];
    }
}