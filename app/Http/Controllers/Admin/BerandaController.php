<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index()
    {
        $totalUser = User::count();
        $totalKelompok = Kelompok::count();

        return view('admin.beranda.index', compact('totalUser', 'totalKelompok'));
    }
}
