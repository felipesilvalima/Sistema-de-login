<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        $request = [];
        if($this->method() == "POST"||$this->method() == "PUT")
        {
            $request=[
            'email'=>'required|email',
            'password'=>'required|min:6|max:8', 

            ];

            return $request;
        }
    }


    public function messages()
    {
        return [
        'email.required' => 'O campo de email é obrigatório.',
        'email.email' => 'O email fornecido não é válido.',
        'password.required' => 'O campo de senha é obrigatório.',
        'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        'password.max' => 'A senha não pode ter mais de 8 caracteres.',
        ];
    }
}
