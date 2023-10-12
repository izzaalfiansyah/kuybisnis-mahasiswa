<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PenjualanRequest;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    function index()
    {
        $penjualan = Penjualan::where('kelompok_id', Auth::user()->kelompok?->id)->orderBy('created_at', 'desc')->paginate(20);

        return view('user.penjualan.index', compact('penjualan'));
    }

    function create()
    {
        return view('user.penjualan.create');
    }

    function store(PenjualanRequest $req)
    {
        $data = $req->validated();

        foreach ($req->file('foto_bukti') as $fotoBukti) {
            $data['foto_bukti'][] = $fotoBukti->store('assets/penjualan/foto_bukti', ['disk' => 'public_upload']);
        }

        Penjualan::create($data);

        return redirect()->route('user.penjualan.index')->with('success_message', 'data penjualan berhasil ditambah');
    }

    function edit($id)
    {
        $penjualan = Penjualan::find($id);
        return view('user.penjualan.edit', compact('penjualan'));
    }

    function update(PenjualanRequest $req, $id)
    {
        $data = $req->validated();

        if ($req->foto_bukti) {
            unset($data['foto_bukti']);
            foreach ($req->file('foto_bukti') as $fotoBukti) {
                $data['foto_bukti'][] = $fotoBukti->store('assets/penjualan/foto_bukti', ['disk' => 'public_upload']);
            }
        } else {
            unset($data['foto_bukti']);
        }

        Penjualan::find($id)->update($data);

        return redirect()->route('user.penjualan.edit', $id)->with('success_message', 'data penjualan berhasil diedit');
    }

    function destroy($id)
    {
        Penjualan::destroy($id);

        return redirect()->route('user.penjualan.index')->with('success_message', 'data penjualan berhasil dihapus');
    }
}
