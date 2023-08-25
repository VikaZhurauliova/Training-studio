<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::all();
        return view('team', [
            'teams' => $teams
        ]);
    }
}
