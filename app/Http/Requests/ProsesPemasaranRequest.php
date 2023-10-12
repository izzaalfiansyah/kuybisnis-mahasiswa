<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProsesPemasaranRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'kelompok_id' => 'required|integer',
            'jenis' => 'required|in:1,2,3',
            'metode' => 'required_if:jenis,1|required_if:jenis,3',
            'media' => 'required_if:jenis,1|required_if:jenis,2',
            'media.*.pilihan' => 'required',
            'media.*.ecommerce' => 'required_if:media.*.pilihan,ecommerce',
            'media.*.ecommerce' => 'required_if:media.*.ecommerce,lainnya',
            'media.*.nama_akun' => 'required',
            'jenis_laporan' => 'required|in:harian,mingguan,bulanan',
            'modal_usaha' => 'required|integer',
            'jumlah_produksi' => 'required|integer',
            'metode_marketing' => "required|in:1,2,3",
        ];
    }
}
