<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $table = 'team';

    public $fillable = [
        'nama',
        'jabatan',
        'foto',
        'media_sosial',
        'akun_instagram',
        'akun_facebook',
        'akun_twitter',
    ];

    public $casts = [
        'media_sosial' => 'object',
    ];
}
