<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $user = User::paginate(10);

        return view('admin.user.index', compact('user'));
    }

    function create()
    {
        return view('admin.user.create');
    }

    function store(UserRequest $req)
    {
        $data = $req->validated();

        if ($req->verifikasi) {
            $data['email_verified_at'] = date('Y-m-d H:i:s');
        }

        User::create($data);

        return redirect()->route('admin.user.index')->with('success_message', 'data pengguna berhasil ditambah');
    }
}
