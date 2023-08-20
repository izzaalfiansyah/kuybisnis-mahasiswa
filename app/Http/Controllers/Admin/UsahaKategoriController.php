<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsahaKategoriRequest;
use App\Models\UsahaKategori;
use Illuminate\Http\Request;

class UsahaKategoriController extends Controller
{
    function index()
    {
        $usahaKategori = UsahaKategori::paginate(10);

        return view('admin.usaha_kategori.index', compact('usahaKategori'));
    }

    function store(UsahaKategoriRequest $req)
    {
        $data = $req->validated();
        UsahaKategori::create($data);

        return redirect()->route('admin.usaha-kategori.index')->with('success_message', 'kategori berhasil disimpan');
    }
}
