<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function index()
    {
        $team = Team::all();

        return view('admin.team.index', compact('team'));
    }

    function create()
    {
        return view('admin.team.create');
    }

    function store(TeamRequest $req)
    {
        $data = $req->validated();

        if ($req->hasFile('foto')) {
            $foto = $req->file('foto');
            $data['foto'] = $foto->store('/assets/team', ['disk' => 'public_upload']);
        } else {
            unset($data['foto']);
        }

        Team::create($data);

        return redirect()->route('admin.team.index')->with('success_message', 'data tim berhasil ditambah');
    }

    function edit($id)
    {
        $team = Team::find($id);

        return view('admin.team.edit', compact('team'));
    }

    function update(TeamRequest $req, $id)
    {
        $data = $req->validated();

        if ($req->hasFile('foto')) {
            $foto = $req->file('foto');
            $data['foto'] = $foto->store('/assets/team', ['disk' => 'public_upload']);
        } else {
            unset($data['foto']);
        }

        Team::find($id)->update($data);

        return redirect()->route('admin.team.edit', $id)->with('success_message', 'data tim berhasil diedit');
    }

    function destroy($id)
    {
        Team::destroy($id);

        return redirect()->route('admin.team.index')->with('success_message', 'data tim berhasil dihapus');
    }
}
