<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengaturanRequest;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    function index()
    {
        $pengaturan = Pengaturan::find('1');

        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    function store(PengaturanRequest $req)
    {
        $data = $req->validated();
        $data['nama_aplikasi'] = "Kuybisnis";
        $data['logo_aplikasi'] = "favicon.png";

        Pengaturan::updateOrCreate(['id' => '1'], $data);

        return redirect()->route('admin.pengaturan.index')->with('success_message', 'pengaturan berhasil disimpan');
    }
}
