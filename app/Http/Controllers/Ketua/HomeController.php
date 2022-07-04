<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $users = Auth::user()->anggota->count();
        $blogs = Blog::count();
        $products = Product::whereHas('group', function($q) {
            $q->where('user_id', Auth::id());
        })->count();

        $orders = Order::whereHas('cart', function($q) {
            $q->where('checkout', true)->whereHas('details', function($q) {
                $q->whereHas('product', function($q) {
                    $q->whereHas('group', function($q) {
                        $q->where('user_id', Auth::id());
                    });
                });
            });
        })->count();

        return view('dashboard.ketua.home', compact('users', 'blogs', 'products', 'orders'));
    }
}
