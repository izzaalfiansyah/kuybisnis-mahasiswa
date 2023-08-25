<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\LaporanController;
use App\Models\Kelompok;
use App\Models\KelompokAnggota;
use App\Models\ProsesPemasaran;
use App\Models\Usaha;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    function index()
    {
        $kelompok = Kelompok::paginate(10);

        return view('admin.kelompok.index', compact('kelompok'));
    }

    function show($id)
    {
        $laporanController = new LaporanController();

        $kelompok = Kelompok::find($id);
        $kelompok_anggota = KelompokAnggota::where('kelompok_id', $id)->get();
        $kelompok_bisnis = Usaha::where('kelompok_id', $id)->first();
        $kelompok_pemasaran = ProsesPemasaran::where('kelompok_id', $id)->first();
        $kelompok_laporan = $laporanController->index($id);

        return view('admin.kelompok.show', compact('kelompok', 'kelompok_anggota', 'kelompok_bisnis', 'kelompok_pemasaran', 'kelompok_laporan'));
    }
}
