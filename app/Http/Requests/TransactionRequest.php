<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'type_transaction_id' => 'required|exists:type_transaction,id',
            'bank_id' => 'required|exists:banks,id',
            //'subcategory_transaction_id' => 'required|exists:subcategory_transaction,id',
            'beneficiary_id' => 'required|exists:beneficiaries,id',
            'amount' => 'required|numeric',
            'note' => 'required|string',
            'created' => 'required|date',
        ];
    }
}
