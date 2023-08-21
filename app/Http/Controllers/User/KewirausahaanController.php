<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UsahaKategori;
use Illuminate\Http\Request;

class KewirausahaanController extends Controller
{
    function index()
    {
        $kategori = UsahaKategori::all();

        return view('user.kewirausahaan.index', compact('kategori'));
    }
}
