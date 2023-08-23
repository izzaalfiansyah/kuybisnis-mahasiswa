<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    function index()
    {
        $kelompok = Kelompok::paginate(10);

        return view('admin.kelompok.index', compact('kelompok'));
    }
}
