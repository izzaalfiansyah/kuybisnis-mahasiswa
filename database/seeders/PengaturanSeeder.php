<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::updateOrCreate(['id' => '1'], [
            'nama_aplikasi' => 'Kuybisnis',
            'logo_aplikasi' => 'favicon.ico',
            'link_video_homepage' => '',
            'link_video_bisnis_plan' => '',
            'link_video_strategi_marketing' => '',
            'link_video_hasil_akhir kegiatan' => '',
            'mail_host' => 'sandbox.smtp.mailtrap.io',
            'mail_port' => '2525',
            'mail_username' => '16d58b0c89cba1',
            'mail_password' => 'f077a3dc3e2f84',
        ]);
    }
}
