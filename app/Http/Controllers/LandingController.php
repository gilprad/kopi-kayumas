<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;

class LandingController extends Controller
{
    public function home()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->get()->take(3);
        $products = Product::orderBy('created_at', 'ASC')->get()->take(4);

        return view('landing.home', compact('blogs', 'products'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->paginate(6);

        return view('landing.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blogs = Blog::where('slug', '!=', $slug)->orderBy('created_at', 'ASC')->get()->take(3);
        $blog = Blog::where('slug', $slug)->firstOrFaiL();

        return view('landing.blog-detail', compact('blogs', 'blog'));
    }

    public function product()
    {
        $products = Product::orderBy('created_at', 'ASC')->get();

        return view('landing.shop', compact('products'));
    }

    public function checkout()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->get()->take(3);

        return view('landing.checkout', compact('blogs'));
    }
}
