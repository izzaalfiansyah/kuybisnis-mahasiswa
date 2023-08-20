<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelompokRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'users_id' => 'required|integer',
            'nama' => 'required|max:255',
            'asal_universitas' => 'required|max:255',
            'ketua_nama' => 'required|max:255',
            'ketua_nim' => 'required|max:255',
        ];
    }
}
