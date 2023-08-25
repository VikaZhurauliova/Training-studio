<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classes()
    {
        return view('classes', [

        ]);
    }
    public function training(Classes $training)
    {
        dd($training->user);
        return view('train', [

        ]);
    }

}
