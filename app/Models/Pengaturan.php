<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;

    public $table = 'pengaturan';

    public $fillable = [
        'nama_aplikasi',
        'logo_aplikasi',
        'link_video_homepage',
        'link_video_bisnis_plan',
        'link_video_strategi_marketing',
        'link_video_hasil_akhir_kegiatan',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_enkripsi',
    ];
}
