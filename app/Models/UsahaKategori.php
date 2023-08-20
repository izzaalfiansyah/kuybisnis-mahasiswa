<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsahaKategori extends Model
{
    use HasFactory;

    public $table = 'usaha_kategori';

    public $fillable = [
        'nama',
    ];
}
