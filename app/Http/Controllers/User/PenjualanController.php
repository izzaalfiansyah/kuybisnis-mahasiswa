<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    function index()
    {
        $penjualan = Penjualan::where('kelompok_id', Auth::user()->kelompok?->id)->get();

        return view('user.penjualan.index', compact('penjualan'));
    }

    function create()
    {
        return view('user.penjualan.create');
    }
}
