<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function __construct()
    {
        $pengaturan = Pengaturan::find('1');

        if ($pengaturan) {
            View::share('app_pengaturan', $pengaturan);
            Config::set('mail.from.address', "admin@" . str_replace(" ", "", strtolower($pengaturan->nama_aplikasi)) . ".com");
            Config::set('mail.from.name', $pengaturan->nama_aplikasi);
        }

        if ($pengaturan?->mail_username) {
            Config::set('mail.host', $pengaturan->mail_host);
            Config::set('mail.port', $pengaturan->mail_port);
            Config::set('mail.username', $pengaturan->mail_username);
            Config::set('mail.password', $pengaturan->mail_password);
            Config::set('mail.encryption', $pengaturan->mail_enkripsi);
        }
    }
}
