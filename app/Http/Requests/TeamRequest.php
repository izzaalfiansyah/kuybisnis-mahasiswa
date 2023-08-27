<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto' => 'nullable|file',
            'akun_instagram' => 'required|max:255',
            'akun_facebook' => 'required|max:255',
            'akun_twitter' => 'required|max:255',
        ];
    }
}
