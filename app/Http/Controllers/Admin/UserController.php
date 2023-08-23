<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.edit', compact('user'));
    }

    function update(UserRequest $req, $id)
    {
        $data = $req->validated();

        if ($req->verifikasi) {
            $data['email_verified_at'] = date('Y-m-d H:i:s');
        } else {
            $data['email_verified_at'] = null;
        }

        if (!$req->password) {
            unset($data['password']);
        }

        User::find($id)->update($data);

        return redirect()->route('admin.user.edit', $id)->with('success_message', 'data pengguna berhasil disimpan');
    }
}
