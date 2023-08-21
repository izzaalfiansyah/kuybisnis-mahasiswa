<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProsesPemasaranRequest;
use App\Models\ProsesPemasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemasaranBisnisController extends Controller
{
    function index()
    {
        $proses = ProsesPemasaran::where('kelompok_id', Auth::user()->kelompok?->id)->first();

        return view('user.pemasaran_bisnis.index', compact('proses'));
    }

    function store(ProsesPemasaranRequest $req)
    {
        $data = $req->validated();

        ProsesPemasaran::updateOrCreate(['kelompok_id' => $req->kelompok_id], $data);

        return redirect()->route('user.pemasaran-bisnis.index')->with('success_message', 'proses pemasaran berhasil disimpan');
    }
}
