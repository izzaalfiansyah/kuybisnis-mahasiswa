<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Usaha;
use App\Models\UsahaKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KewirausahaanController extends Controller
{
    function index()
    {
        $kategori = UsahaKategori::all();
        $usaha = Usaha::where('kelompok_id', Auth::user()->kelompok?->id)->first();

        return view('user.kewirausahaan.index', compact('kategori', 'usaha'));
    }
}
