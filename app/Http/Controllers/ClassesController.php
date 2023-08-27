<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Team;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classes(Classes $classes)
    {
        return view('classes', [
            'classes' => $classes
        ]);
    }
    public function training()
    {
        $team = Team::all();
        $classes = Classes::all();

        return view('train', [
            'classes' => $classes,
            'team' => $team,
        ]);
    }

}
