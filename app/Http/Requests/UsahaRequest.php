<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsahaRequest extends FormRequest
{
    public function rules(): array
    {
        $isEdit = false;

        if (request()->id) {
            $isEdit = true;
        }

        return [
            'kelompok_id' => 'required|integer',
            'kategori_id' => 'required|integer',
            'nama_produk' => 'required|max:255',
            'legalitas_usaha' => [$isEdit ? 'nullable' : 'required', 'file', 'max:5000'],
            'manfaat' => 'required',
            'segmentasi_konsumen' => 'required',
            'hubungan_konsumen' => 'required',
            'saluran' => 'required',
            'aktifitas_utama' => 'required',
            'sumberdaya_utama' => 'required',
            'mitra_utama' => 'required',
            'struktur_biaya' => 'required',
            'arus_pendapatan' => 'required',
            'foto_produk.*' => 'file|max:5000',
        ];
    }
}
