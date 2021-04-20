<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'invoice_serial' => 'nullable|string',
            'client' => 'required|string',
            'unit' => 'required|numeric',
            'product' => 'required|string',
            'amount' => 'required|numeric',
            'tax' => 'required|numeric',
            'created' => 'required|date',  
            'image' => 'nullable|file|max:10000', 
        ];
    }
}
