<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
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

        return redirect()->route('user.dashboard.index')->with('success_message', $req->id ? 'anggota kelompok berhasil diedit' : 'anggota kelompok berhasil ditambah');
    }

    function destroy($id)
    {
        KelompokAnggota::destroy($id);

        return redirect()->route('user.dashboard.index')->with('success_message', 'anggota kelompok berhasil dihapus');
    }

    function sertifikat($kelompokId)
    {
        $anggota = KelompokAnggota::where('kelompok_id', $kelompokId)->get();
        $kelompok = Kelompok::find($kelompokId);

        $data_nama = [];
        $data_nama[0] = $kelompok->ketua_nama;

        foreach ($anggota as $item) {
            $data_nama[] = $item->nama;
        }

        $imageFile = file_get_contents(public_path('/assets/pdf/sertifikat.jpg'));
        $image = 'data:image/png;base64,' . base64_encode($imageFile);

        $title = 'Sertifikat Kelompok ' . $kelompok->nama . '.pdf';

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.kelompok-anggota-sertifikat', compact('data_nama', 'image', 'title'));
        $pdf->setPaper('a4', 'landscape');
        $pdf->setWarnings(false);

        return $pdf->stream($title);
    }
}
