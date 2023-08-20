<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use App\Models\KelompokAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    function index()
    {
        $kelompok = Kelompok::where('users_id', Auth::id())->first();

        $kelompok_anggota = [];
        if ($kelompok) {
            $kelompok_anggota = KelompokAnggota::where('kelompok_id', $kelompok->id)->get();
        }

        return view('user.beranda.index', compact('kelompok', 'kelompok_anggota'));
    }
}
