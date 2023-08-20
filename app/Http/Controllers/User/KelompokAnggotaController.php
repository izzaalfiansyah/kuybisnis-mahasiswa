<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KelompokAnggota;
use Illuminate\Http\Request;

class KelompokAnggotaController extends Controller
{
    function store(Request $req)
    {
        $req->validate([
            'kelompok_id' => "required|integer",
            'anggota_nim' => 'required|max:255',
            'anggota_nama' => 'required|max:255',
        ]);

        $data = [
            'kelompok_id' => $req->kelompok_id,
            'nim' => $req->anggota_nim,
            'nama' => $req->anggota_nama,
        ];

        KelompokAnggota::create($data);

        return redirect()->route('user.dashboard.index')->with('success_message', 'anggota kelompok berhasil ditambahkan');
    }
}
