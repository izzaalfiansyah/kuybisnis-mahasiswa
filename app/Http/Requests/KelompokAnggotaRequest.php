<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelompokAnggotaRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'kelompok_id' => 'required|integer',
            'nama' => 'required|max:255',
            'nim' => 'required|max:255',
        ];
    }
}
