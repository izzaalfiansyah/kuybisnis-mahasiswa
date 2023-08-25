<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function __construct()
    {
        $pengaturan = Pengaturan::find('1');
        View::share('app_pengaturan', $pengaturan);
    }
}
