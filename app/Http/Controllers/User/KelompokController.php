<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelompokRequest;
use App\Models\Kelompok;
use App\Models\KelompokAnggota;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    function store(KelompokRequest $req)
    {
        $data = $req->validated();
        Kelompok::updateOrCreate(['id' => $req->id], $data);

        return redirect()->route('user.dashboard.index')->with('success_message', 'identitas kelompok berhasil disimpan');
    }

    function sertifikat($id)
    {
        $kelompok = Kelompok::find($id);
        $kelompok_anggota = KelompokAnggota::where('kelompok_id', $kelompok->id)->get();

        $title = "Sertifikat Kelompok $kelompok->nama.pdf";

        $data_image = file_get_contents(public_path('/assets/pdf/potrait.jpg'));
        $image = 'data:image/jpg;base64,' . base64_encode($data_image);

        $nama = $kelompok->nama;

        $anggota = [
            [
                'nama' => $kelompok->ketua_nama,
                'nim' => $kelompok->ketua_nim,
            ],
        ];

        foreach ($kelompok_anggota as $item) {
            array_push($anggota, [
                'nama' => $item->nama,
                'nim' => $item->nim,
            ]);
        }

        return view('pdf.kelompok-sertifikat', compact('nama', 'anggota', 'image', 'title'));

        $pdf = Pdf::loadView('pdf.kelompok-sertifikat', compact('nama', 'anggota', 'image', 'title'));
        $pdf->setPaper('a4', 'potrait');
        $pdf->setWarnings(false);

        return $pdf->stream($title);
    }
}
