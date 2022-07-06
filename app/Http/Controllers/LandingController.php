<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Ticket;

class LandingController extends Controller
{
    public function home()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->get()->take(3);
        $products = Product::orderBy('created_at', 'ASC')->get()->take(4);

        return view('landing.home', compact('blogs', 'products'));
    }

    public function about()
    {
        $groups = Group::get(['id', 'name']);

        return view('landing.about', compact('groups'));
    }

    public function aboutDetail($id)
    {
        $group = Group::findOrFail($id);

        return view('landing.about-detail', compact('group'));
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

    public function contact()
    {
        return view('landing.contact');
    }

    public function sendTicket(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|string|max:64',
            'phone'   => 'required|string|phone:id',
            'subject' => 'required|string',
            'message' => 'required'
        ]);

        Ticket::create([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Aduan telah dibuat');
    }
}
