<?php

namespace App\Http\Requests;

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
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            're_password' => 'required_with:password|same:password'
        ];
    }

    function attributes(){
        return [
            'name' => 'Họ tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            're_password' => 'Mật khẩu'
        ];
    }

    function messages() {
        return [
            'name.required' => 'Chưa nhập :attribute',
            'email.required' => 'Chưa nhập :attribute',
            'email.email' => ':attribute không hợp lệ',
            'password.required' => 'Chưa nhập :attribute',
            're_password.required_with' => 'Chưa nhập :attribute',
            're_password.same' => ':attribute nhập lại không đúng'
        ];
    }
}
