<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProsesPemasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemasaranBisnisController extends Controller
{
    function index()
    {
        $proses = ProsesPemasaran::where('kelompok_id', Auth::user()->kelompok?->id)->first();

        return view('user.pemasaran_bisnis.index', compact('proses'));
    }
}
