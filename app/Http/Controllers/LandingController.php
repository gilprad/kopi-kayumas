<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class LandingController extends Controller
{
    public function home()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->get()->take(3);

        return view('landing.home', compact('blogs'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->paginate(6);

        return view('landing.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->get()->take(3);
        $blog = Blog::where('slug', $slug)->firstOrFaiL();

        return view('landing.blog-detail', compact('blogs', 'blog'));
    }
}
