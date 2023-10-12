<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    public $table = 'penjualan';

    public $fillable = [
        'kelompok_id',
        'penjualan_bersih',
        'harga_jual_produk',
        'biaya_tetap',
        'biaya_variabel',
        'biaya_operasional',
        'biaya_non_operasional',
        'biaya_pajak',
        'foto_bukti',
    ];

    public $casts = [
        'penjualan_bersih' => 'integer',
        'harga_jual_produk' => 'integer',
        'biaya_tetap' => 'integer',
        'biaya_variabel' => 'integer',
        'biaya_operasional' => 'integer',
        'biaya_non_operasional' => 'integer',
        'biaya_pajak' => 'integer',
        'foto_bukti' => 'object',
    ];

    public $appends = [
        'total_biaya',
        'total_penjualan_bersih',
        'nilai_keuntungan_bersih',
    ];

    function getTotalBiayaAttribute()
    {
        return $this->biaya_tetap + $this->biaya_variabel + $this->biaya_operasional + $this->biaya_non_operasional + $this->biaya_pajak;
    }

    function getTotalPenjualanBersihAttribute()
    {
        return $this->penjualan_bersih * $this->harga_jual_produk;
    }

    function getNilaiKeuntunganBersihAttribute()
    {
        return $this->getTotalPenjualanBersihAttribute() - $this->getTotalBiayaAttribute();
    }
}
