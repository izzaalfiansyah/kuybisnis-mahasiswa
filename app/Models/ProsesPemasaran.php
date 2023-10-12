<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsesPemasaran extends Model
{
    use HasFactory;

    public $table = 'proses_pemasaran';

    public $fillable = [
        'kelompok_id',
        'jenis',
        'metode',
        'media',
        'jenis_laporan',
        'modal_usaha',
        'jumlah_produksi',
        'metode_marketing',
    ];

    public $casts = [
        'media' => 'object',
    ];
}
