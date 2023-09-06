<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $abouts = About::all();

        return view('about', [
            'abouts' => $abouts
        ]);
    }

    public function aboutBlog()
    {

        $blogs = Blog::all();

        return view('about_blog', [
            'blogs' => $blogs,
        ]);
    }

}
