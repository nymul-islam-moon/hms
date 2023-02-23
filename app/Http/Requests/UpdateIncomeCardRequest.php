<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIncomeCardRequest extends FormRequest
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
            'card_id' => 'required',
            'currency' => 'required',
            'credit_by' => 'required',
            'credit_for' => 'required',
            'amount' => 'required',
            'date' =>'required',
            'description' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
