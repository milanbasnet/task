<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10',
            'password' => ['required', 'min:6', 'regex:/[0-9]([0-9]|-(?!-))+/'],
            'password_confirmation' => 'required|min:6|same:password|',
        ];
    }
    public function messages()
    {
        return [
            'password.regex' => 'Password should contain minimum two digits ',

        ];
    }
}
