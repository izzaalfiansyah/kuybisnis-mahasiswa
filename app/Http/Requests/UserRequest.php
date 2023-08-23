<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'password' => 'required|min:8|max:20',
            'role' => 'required|in:1,2'
        ];
    }
}
