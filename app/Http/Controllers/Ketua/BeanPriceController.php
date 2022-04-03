<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BeanPrice;

class BeanPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bean_prices = BeanPrice::where('user_id', '=', Auth::id())->orderBy('created_at', 'ASC')->paginate(10);
        
        return view('dashboard.ketua.price.index', compact('bean_prices'));
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
        $this->validate($request, [
            'name'  => 'required|string',
            'price' => 'required|integer'
        ]);

        BeanPrice::create([
            'name'    => $request->name,
            'price'   => $request->price,
            'user_id' => Auth::id()
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bean_price = BeanPrice::findOrFail($id);

        return view('dashboard.ketua.price.edit', compact('bean_price'));
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
        $this->validate($request, [
            'name'  => 'required|string',
            'price' => 'required|integer',
        ]);

        $bean_price = BeanPrice::findOrFail($id);

        $bean_price->update([
            'name'  => $request->name,
            'price' => $request->price,
        ]);

        return redirect()->route('ketua.harga.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bean_price = BeanPrice::findOrFail($id);
        $bean_price->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
