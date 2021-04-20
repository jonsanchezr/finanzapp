<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'serial' => 'required|string',
            'from_name' => 'required|string',
            'from_country' => 'required|string',
            'from_state' => 'required|string',
            'from_city' => 'required|string',
            'from_address' => 'required|string',
            'from_phone' => 'required|string',
            'from_mail' => 'required|string',
            'image' => 'nullable|file|max:10000',
        ];
    }
}
