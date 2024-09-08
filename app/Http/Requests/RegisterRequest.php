<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6|', 

            ];

            return $request;
        }
    }


    public function messages()
    {
        return [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.string' => 'O nome deve ser uma string.',
        'name.max' => 'O nome não pode ter mais de 255 caracteres.',
        'email.required' => 'O campo de email é obrigatório.',
        'email.email' => 'O email fornecido não é válido.',
        'password.required' => 'O campo de senha é obrigatório.',
        'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        'password.max' => 'A senha não pode ter mais de 8 caracteres.',
        
        ];
    }
   
}
