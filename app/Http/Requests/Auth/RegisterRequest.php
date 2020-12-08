<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "first_name" => ['required', 'string', 'min:2'],
            "last_name" => ['required', 'string', 'min:2'],
//            "dob" => ['required', 'date'],
            "phone" => ['required', 'string', 'unique:customers'],
            "email" => ['required', 'string', 'email', 'min:2'],
            "address" => ['required', 'string', 'min:2'],
            "bvn" => ['required', 'string', 'min:10'],
            "password" => ['required', 'confirmed', 'string', 'min:6'],
            "password_confirmation" => ['required'],
        ];
    }
}
