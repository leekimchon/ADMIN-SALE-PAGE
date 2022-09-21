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
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ];
    }

    function attributes(){
        return [
            'email' => 'Email',
            'password' => 'Mật khẩu'
        ];
    }

    function messages() {
        return [
            'email.email' => ':attribute không hợp lệ',
            'email.required' => 'Bạn chưa nhập :attribute',
            'email.exists' => ':attribute chưa đăng ký',
            'password.required' => 'Bạn chưa nhập :attribute'
        ];
    }
}
