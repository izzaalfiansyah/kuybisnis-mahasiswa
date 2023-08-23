<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use App\Models\KelompokAnggota;
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
        $kelompok = Kelompok::find($id);
        $kelompok_anggota = KelompokAnggota::where('kelompok_id', $id)->get();

        return view('admin.kelompok.show', compact('kelompok', 'kelompok_anggota'));
    }
}
