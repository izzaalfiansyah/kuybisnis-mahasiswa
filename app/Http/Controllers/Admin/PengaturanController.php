<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    function index()
    {
        $pengaturan = Pengaturan::first();

        return view('admin.pengaturan.index', compact('pengaturan'));
    }
}
