<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Classes;
use App\Models\Team;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classes()
    {

        $classes = Classes::all();

        return view('classes', [
            'classes'=> $classes
        ]);
    }
    public function training(Classes $classes)
    {
        $teams = Team::all();
        $classes = Classes::all();
        $recentPost = Blog::query()->where('is_active', 1)->orderBy('created_at', 'DESC')->take(3)->get();

        return view('train', [
        'classes'=> $classes,
        'teams'=> $teams,
        'recentPost' => $recentPost
        ]);
    }

}
