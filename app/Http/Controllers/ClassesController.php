<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classes()
    {
        return view('classes', [

        ]);
    }
    public function training()
    {
        return view('training', [

        ]);
    }

}
