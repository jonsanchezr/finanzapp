<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankRequest extends FormRequest
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
            'name' => 'required|string',
            'account' => 'required|string',
            'holder' => 'required|string',
            'identification' => 'nullable|string',
            'type' => 'nullable|string',
            'email' => 'nullable|string',
        ];
    }
}
