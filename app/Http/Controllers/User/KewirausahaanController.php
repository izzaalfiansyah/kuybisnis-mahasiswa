<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsahaRequest;
use App\Models\Usaha;
use App\Models\UsahaKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KewirausahaanController extends Controller
{
    function index()
    {
        $kategori = UsahaKategori::all();
        $usaha = Usaha::where('kelompok_id', Auth::user()->kelompok?->id)->first();

        return view('user.kewirausahaan.index', compact('kategori', 'usaha'));
    }

    function store(UsahaRequest $req)
    {
        $data = $req->validated();

        if ($req->hasFile('legalitas_usaha')) {
            $legalitasUsaha = $req->file('legalitas_usaha');
            $data['legalitas_usaha'] = $legalitasUsaha->store('assets/usaha/legalitas_usaha', ['disk' => 'public_upload']);
        } else {
            unset($data['legalitas_usaha']);
        }

        if ($req->foto_produk) {
            unset($data['foto_produk']);
            foreach ($req->file('foto_produk') as $fotoProduk) {
                $data['foto_produk'][] = $fotoProduk->store('assets/usaha/foto_produk', ['disk' => 'public_upload']);
            }
        } else {
            unset($data['foto_produk']);
        }

        Usaha::updateOrCreate(['kelompok_id' => $req->kelompok_id], $data);

        return redirect()->route('user.kewirausahaan.index')->with('success_message', 'plan bisnis kewirausahaan berhasil disimpan');
    }
}
