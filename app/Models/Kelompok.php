<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    public $table = 'kelompok';

    public $fillable = [
        'users_id',
        'nama',
        'asal_universitas',
        'ketua_nama',
        'ketua_nim',
    ];

    public $with = [
        'user'
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
