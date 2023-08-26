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

        if ($req->logo_aplikasi) {
            $logo = $req->file('logo_aplikasi');
            $data['logo_aplikasi'] = $logo->store('assets/', ['disk' => 'public_upload']);
        } else {
            unset($data['logo_aplikasi']);
        }

        Pengaturan::updateOrCreate(['id' => '1'], $data);

        return redirect()->route('admin.pengaturan.index')->with('success_message', 'pengaturan berhasil disimpan');
    }

    function emailStore(Request $req)
    {
        $data = $req->validate([
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'enkripsi' => 'nullable',
        ]);

        Pengaturan::find('1')->update([
            'mail_host' => $req->host,
            'mail_port' => $req->port,
            'mail_username' => $req->username,
            'mail_password' => $req->password,
            'mail_enkripsi' => $req->enkripsi,
        ]);

        return redirect()->route('admin.pengaturan.index')->with('success_message', 'pengaturan email smtp berhasil disimpan');
    }
}
