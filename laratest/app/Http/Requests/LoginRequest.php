<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'password' => 'required|min:8|max:20',
            'email' => 'required|regex:/^.+@.+$/i|min:10|max:50'
        ];
    }

    public function messages(){
        return [

            'email.required' => "can't left empty...",
            'password.required' =>"can't left empty..."
        ];
    }
}
