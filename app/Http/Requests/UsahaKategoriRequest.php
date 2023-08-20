<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsahaKategoriRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama' => 'required|max:255'
        ];
    }
}
