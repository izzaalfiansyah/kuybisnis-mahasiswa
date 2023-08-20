<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelompokRequest;
use App\Models\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    function store(KelompokRequest $req)
    {
        $data = $req->validated();
        Kelompok::updateOrCreate(['id' => $req->id], $data);

        return redirect()->route('user.dashboard.index')->with('success_message', 'identitas kelompok berhasil disimpan');
    }
}
