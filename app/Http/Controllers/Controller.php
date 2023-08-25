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
        View::share('app_pengaturan', $pengaturan);

        if ($pengaturan?->mail_username) {
            Config::set('mail.driver', 'smtp');
            Config::set('mail.mailer', 'smtp');
            Config::set('mail.host', 'smtp.gmail.com');
            Config::set('mail.port', '465');
            Config::set('mail.encryption', 'ssl');
            Config::set('mail.from.address', 'admin@kuybisnis.com');
            Config::set('mail.username', $pengaturan->mail_username);
            Config::set('mail.username', $pengaturan->mail_password);
        }
    }
}
