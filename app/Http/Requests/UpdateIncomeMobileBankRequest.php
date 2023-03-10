<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIncomeMobileBankRequest extends FormRequest
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
            'mobile_bank_id' => 'required',
            'currency_id' => 'required',
            'cash_in_for' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'cash_in_by_name' => 'required',
            'cash_in_by_phone' => 'required',
            'description' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
