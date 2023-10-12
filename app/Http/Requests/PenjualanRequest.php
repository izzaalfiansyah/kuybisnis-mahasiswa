<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'kelompok_id' => 'required|integer',
            'penjualan_bersih' => 'required|integer',
            'harga_jual_produk' => 'required|integer',
            'biaya_tetap' => 'required|integer',
            'biaya_variabel' => 'required|integer',
            'biaya_operasional' => 'required|integer',
            'biaya_non_operasional' => 'required|integer',
            'biaya_pajak' => 'required|integer',
            'foto_bukti.*' => 'required|file|max:5000',
        ];
    }
}
