<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Order;
use App\Models\Province;
use App\Models\City;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class TransactionController extends Controller
{
    public function cart() 
    {
        $carts = CartDetail::whereHas('cart', function($q) {
            $q->where([
                ['user_id', Auth::id()],
                ['checkout', false]
            ]); 
         })->get();

         $subtotal = $carts->sum(function($q) {
             return $q->product->price * $q->quantity;
         });

         $products = Product::orderBy('created_at', 'ASC')->get()->take(4);

         return view('landing.cart', compact('carts', 'subtotal', 'products'));
    }

    public function addToCart(Request $request) 
    {
        $this->validate($request, [
            'id'       => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $cart = Cart::where([
            ['user_id', Auth::id()],
            ['checkout', false]
        ])->first();

        if(empty($cart)) {
            $cart = Cart::create([
                'user_id' => Auth::id()
            ]);
        } else {
            $cart = $cart;
        }

        $cart_detail = CartDetail::where([
            ['cart_id', $cart->id],
            ['product_id', $request->id]
        ])->first();

        if(empty($cart_detail)) {
            CartDetail::create([
                'cart_id'    => $cart->id,
                'product_id' => $request->id,
                'quantity'   => $request->quantity
            ]);
        } else {
            $cart_detail->update([
                'quantity' => $cart_detail->quantity + $request->quantity
            ]);
        }

        return redirect()->route('keranjang')->with('success', 'Data berhasil ditambahkan');
    }

    public function updateCart(Request $request, $id) 
    {
        if($request->ajax()) {
            $this->validate($request, [
                'quantity' => 'required|integer'
            ]);

            $cart = CartDetail::whereHas('cart', function($q) {
                $q->where([
                    ['user_id', Auth::id()],
                    ['checkout', false]
                ]);
            })->findOrFail($id);

            $cart->update([
                'quantity' => $request->quantity
            ]);

            return response()->json();
        }
    }

    public function deleteCart($id) 
    {
        $cart = CartDetail::findOrFail($id);
        $cart->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function order()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->get()->take(3);
        $cart = Cart::where([
            ['user_id', Auth::id()],
            ['checkout', false]
        ])->firstOrFail();

        $provinces = Province::pluck('name', 'province_id');
        $cart_details = CartDetail::where('cart_id', $cart->id)->get();
        $subtotal = $cart_details->sum(function($q) {
            return $q->product->price * $q->quantity;
        });
        
        $weight = $cart_details->sum(function($q) {
            return $q->product->weight * $q->quantity;
        });

        return view('landing.checkout', compact('blogs', 'cart', 'provinces', 'subtotal', 'weight'));
    }

    public function getCities($id)
    {
        $cities = City::where('province_id', $id)->pluck('name', 'city_id');

        return response()->json($cities);
    }

    public function getShippingCost(Request $request)
    {
        if($request->ajax()) {
            $cost = RajaOngkir::ongkosKirim([
                'origin'      => $request->city_origin,
                'destination' => $request->city_destination,
                'weight'      => $request->weight,
                'courier'     => $request->courier
            ])->get();
    
            return response()->json($cost);
        }
    }

    public function addOrder(Request $request, $id) 
    {
        $this->validate($request, [
            'customer_name'        => 'required|string',
            'customer_phone'       => 'required|string|phone:id',
            'customer_address'     => 'required|string',
            'customer_province'    => 'required|string',
            'customer_city'        => 'required|string',
            'customer_postal_code' => 'required|string',
            'customer_shipping'    => 'required|integer',
            'subtotal'             => 'required|integer',
            'payment_type'         => 'required|string'
        ]);
        
        $cart = Cart::findOrFail($id);
        $cart->update([
            'checkout' => true
        ]);

        if($request->terms == 'checked') {
            $order = Order::create([
                'cart_id'              => $cart->id,
                'customer_name'        => $request->customer_name,
                'customer_phone'       => $request->customer_phone,
                'customer_address'     => $request->customer_address,
                'customer_province'    => $request->customer_province,
                'customer_city'        => $request->customer_city,
                'customer_postal_code' => $request->customer_postal_code,
                'customer_shipping'    => $request->customer_shipping,
                'subtotal'             => $request->subtotal,
                'payment_type'         => $request->payment_type,
                'status'               => 1
            ]);

            if($order->payment_type == 'transfer') {
                return redirect()->route('pembayaran', $order->id)->with('success', 'Pesanan berhasil dibuat');
            } else {
                $order->update([
                    'status' => 2
                ]);

                return redirect()->route('pembeli.pesanan.index')->with('success', 'Pesanan diproses');
            }
        } else {
            $cart->update([
                'checkout' => false
            ]);

            return redirect()->back()->with('success', 'Anda harus menyetujui syarat dan ketentuan pembelian');
        }
    }

    public function payment($id)
    {
        $order = Order::findOrFail($id);

        return view('landing.payment', compact('order'));
    }

    public function addPayment(Request $request, $id)
    {
        $this->validate($request, [
            'customer_validation' => 'required|image|mimes:png,jpeg,jpg'
        ]);

        $order = Order::findOrFail($id);

        if ($request->hasFile('customer_validation')) {
            $file = $request->file('customer_validation');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/customer/' . $filename, file_get_contents($file));
        }
        
        $order->update([
            'customer_validation' => $filename,
            'status'              => 2
        ]);

        return redirect()->route('pembeli.pesanan.index')->with('success', 'Pesanan diproses');
    }
}
