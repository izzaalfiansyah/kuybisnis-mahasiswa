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
            $config = array(
                'driver'     => 'smtp',
                'host'       => 'smtp.gmail.com',
                'port'       => '465',
                'from'       => env('MAIL_FROM_ADDRESS'),
                'encryption' => 'ssl',
                'username'   => $pengaturan?->mail_username,
                'password'   => $pengaturan?->mail_password,
            );

            Config::set('mail', $config);
        }
    }
}
