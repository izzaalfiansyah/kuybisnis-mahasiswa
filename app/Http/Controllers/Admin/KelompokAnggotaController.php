<?php

namespace App\Http\Controllers\Admin;

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

        KelompokAnggota::updateOrCreate(['id' => $req->id], $data);

        return redirect()->route('admin.kelompok.show', $req->kelompok_id)->with('success_message', $req->id ? 'anggota kelompok berhasil diedit' : 'anggota kelompok berhasil ditambah');
    }

    function destroy($id)
    {
        KelompokAnggota::destroy($id);

        return redirect()->back()->with('success_message', 'anggota kelompok berhasil dihapus');
    }
}
