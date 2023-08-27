<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function index()
    {
        $team = Team::all();
        return view('admin.team.index', compact('team'));
    }
}
