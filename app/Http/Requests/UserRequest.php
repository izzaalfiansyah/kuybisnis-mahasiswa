<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        $user = request()->route('user');

        return [
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'password' => [$user ? 'nullable' : 'required', 'min:8', 'max:20'],
            'role' => 'required|in:1,2'
        ];
    }
}
