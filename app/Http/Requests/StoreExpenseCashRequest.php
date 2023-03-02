<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseCashRequest extends FormRequest
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
            'expense_by_id' => 'required',
            'currency_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'description' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
