<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsahaKategori;
use Illuminate\Http\Request;

class UsahaKategoriController extends Controller
{
    function index()
    {
        $usahaKategori = UsahaKategori::paginate(10);

        return view('admin.usaha_kategori.index');
    }
}
