<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaturanRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama_aplikasi' => 'nullable',
            'logo_aplikasi' => 'nullable',
            'link_video_homepage' => 'required|url:http,https',
            'link_video_bisnis_plan' => 'required|url:http,https',
            'link_video_strategi_marketing' => 'required|url:http,https',
            'link_video_hasil_akhir_kegiatan' => 'required|url:http,https',
        ];
    }
}
