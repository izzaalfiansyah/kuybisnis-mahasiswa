<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;

    public $table = 'usaha';

    public $fillable = [
        'kelompok_id',
        'kategori_id',
        'nama_produk',
        'legalitas_usaha',
        'manfaat',
        'segmentasi_konsumen',
        'hubungan_konsumen',
        'saluran',
        'aktifitas_utama',
        'sumberdaya_utama',
        'mitra_utama',
        'struktur_biaya',
        'arus_pendapatan',
        'foto_produk',
    ];

    public $casts = [
        'legalitas_usaha' => 'object',
        'foto_produk' => 'object',
    ];

    public $with = [
        'kelompok',
        'kategori',
    ];

    function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'kelompok_id');
    }

    function kategori()
    {
        return $this->belongsTo(UsahaKategori::class, 'kategori_id');
    }
}
