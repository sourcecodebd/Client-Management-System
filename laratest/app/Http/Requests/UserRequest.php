<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'full_name' => 'required|unique:customers|min:3|max:30|regex:/[a-zA-Z]/i|bail',
            'username' => 'required|max:9|bail',
            'password' => 'required|min:8|max:20',
            'email' => 'required|unique:customers|unique:admins|unique:sales|unique:accountants|unique:vendors|regex:/^.+@.+$/i|min:10|max:50',
            'city' => 'required|min:3|max:20',
            'country' => 'required|min:3|max:20',
            'company_name' => 'required|min:3|max:20',
            'phone' => 'required|min:11|numeric',
            
        ];
    }

    public function messages(){
        return [

            'username.required' => "can't left empty...",
            'password.required' =>"can't left empty..."
        ];
    }
}

// unique:tablename = new usernamedb() ;  use App\Check\usernamedb;
