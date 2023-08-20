<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokAnggota extends Model
{
    use HasFactory;

    public $table = 'kelompok_anggota';

    public $fillable = [
        'kelompok_id',
        'nama',
        'nim',
    ];
}
