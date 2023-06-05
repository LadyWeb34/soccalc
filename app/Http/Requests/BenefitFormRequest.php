<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BenefitFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules= [
            'category_id' => [
                'required',
                'string',
                'max:200'
            ],
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'type' => [
                'required',
                'string',
                'max:200'
            ],
            'frequency' => [
                'required',
                'string',
                'max:200'
            ],
            'estimated_amount' => [
                'required'
            ],
            'level_of_regulation' => [
                'required',
                'string',
                'max:200'
            ],
            'footing' => [
                'required',
                'string',
                'max:200'
            ],
            'condition' => [
                'required'
            ],
            'subject_id' => [
                'required'
            ]
        ];
        return $rules;
    }
}
