<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KewirausahaanController extends Controller
{
    function index()
    {
        return view('user.kewirausahaan.index');
    }
}
