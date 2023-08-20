<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    function index()
    {
        $kelompok = Kelompok::where('users_id', Auth::id())->first();
        return view('user.beranda.index', compact('kelompok'));
    }
}
