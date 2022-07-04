<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\Province;
use App\Models\City;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::whereHas('cart', function($q) {
            $q->where([
                ['user_id', Auth::id()],
                ['checkout', true]
            ]);
        })->orderBy('created_at', 'ASC')->paginate(10);

        return view('dashboard.pembeli.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $province = Province::where('id', $order->customer_province)->first();
        $city = City::where('id', $order->customer_city)->first();

        return view('dashboard.pembeli.order.show', compact('order', 'province', 'city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cancelOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 4 
        ]);

        return redirect()->back()->with('success', 'Pesanan dibatalkan');
    }

    public function refund($id)
    {
        $order = Order::findOrFail($id);
        
        return view('dashboard.pembeli.order.refund', compact('order'));
    }

    public function refundOrder(Request $request, $id)
    {
        $this->validate($request, [
            'refund_validation' => 'required|image|mimes:png,jpeg,jpg',
            'refund_reason'     => 'required|string'
        ]);

        $order = Order::findOrFail($id);

        if ($request->hasFile('refund_validation')) {
            $file = $request->file('refund_validation');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/refund/' . $filename, file_get_contents($file));
        }

        $order->update([
            'status'            => 6,
            'refund_validation' => $filename,
            'refund_reason'     => $request->refund_reason
        ]);

        return redirect()->route('pembeli.pesanan.index')->with('success', 'Pengajuan pengembalian barang terkirim');
    }

    public function finishOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 9
        ]);

        return redirect()->back()->with('success', 'Pesanan selesai');
    }
}
