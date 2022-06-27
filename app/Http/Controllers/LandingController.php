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
        $blog = Blog::where('slug', $slug)->firstOrFaiL();
        $blogs = Blog::where('title', '!=', $blog->title)->orderBy('created_at', 'ASC')->get()->take(3);

        return view('landing.blog-detail', compact('blogs', 'blog'));
    }

    public function product()
    {
        $products = Product::orderBy('created_at', 'ASC')->paginate(6);

        return view('landing.shop', compact('products'));
    }

    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $products = Product::where('name', '!=', $product->name)->get()->take(4);

        return view('landing.shop-detail', compact('products', 'product'));
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%'.$request->search.'%')->get();
        
        if($request->ajax()) {
            return response()->json($products, 200);
        }
    }
}
