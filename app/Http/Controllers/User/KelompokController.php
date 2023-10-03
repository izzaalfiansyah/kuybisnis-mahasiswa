<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelompokRequest;
use App\Models\Kelompok;
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
        $title = "Sertifikat Kelompok $kelompok->nama.pdf";

        $data_image = file_get_contents(public_path('/assets/pdf/sertifikat.jpg'));
        $image = 'data:image/jpg;base64,' . base64_encode($data_image);
        $nama = $kelompok->nama;

        $pdf = Pdf::loadView('pdf.kelompok-sertifikat', compact('nama', 'image', 'title'));
        $pdf->setPaper('a4', 'landscape');
        $pdf->setWarnings(false);

        return $pdf->stream($title);
    }
}
