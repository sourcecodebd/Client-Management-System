<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhysicalRequest extends FormRequest
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
            'customer_name' => 'required|max:30|min:3',
            'customer_address' => 'required|max:50|min:3',
            'phone' => 'required|min:11|max:15',
            'product_id' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required|min:1',
            'quantity' => 'required|max:20|min:1',
            'total_price' => 'required|min:1',
            'payment_type' => 'required|max:5',
            'status' => 'required',
            
        ];
    }

}
