<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishClassesController extends Controller
{
    public function favouriteClasses()
    {

        return view('auth.account-classes', [
            'user' => Auth::user(),
        ]);
    }

    public function add(Classes $classes)
    {
        $user = Auth::user();
        $user->wishlist()->attach($classes);

        return redirect()->back();
    }

    public function delete(Classes $classes)
    {
        $user = Auth::user();

        $user->wishlist()->detach($classes);

        return redirect()->back();
    }
}

