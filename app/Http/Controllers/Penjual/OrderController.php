<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            $q->where('checkout', true);
        })->orderBy('created_at', 'ASC')->paginate(10);

        return view('dashboard.penjual.order.index', compact('orders'));
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

        return view('dashboard.penjual.order.show', compact('order', 'province', 'city'));
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

    public function receiptOrder($id)
    {
        $order = Order::findOrFail($id);
        
        return view('dashboard.penjual.order.receipt', compact('order'));
    }

    public function acceptOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 3 
        ]);

        return redirect()->route('penjual.pesanan.index')->with('success', 'Pesanan diterima');
    }

    public function cancelOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 4 
        ]);

        return redirect()->route('penjual.pesanan.index')->with('success', 'Pesanan dibatalkan');
    }

    public function deliveryOrder(Request $request, $id)
    {
        $this->validate($request, [
            'shipping_receipt' => 'required|string',
        ]);

        $order = Order::findOrFail($id);
        
        $order->update([
            'status'           => 5,
            'shipping_receipt' => $request->shipping_receipt
        ]);

        return redirect()->back()->with('success', 'Pesanan dikirim');
    }

    public function refund($id)
    {
        $order = Order::findOrFail($id);

        return view('dashboard.penjual.order.refund', compact('order'));
    }

    public function acceptRefund($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 7
        ]);

        return redirect()->route('penjual.pesanan.index')->with('success', 'Pengajuan pengembalian barang diterima');
    }

    public function declineRefund($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 8
        ]);

        return redirect()->route('penjual.pesanan.index')->with('success', 'Pengajuan pengembalian barang ditolak');
    }
}
