<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BeanStock;

class BeanStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bean_stocks = BeanStock::where('user_id', '=', Auth::id())->orderBy('created_at', 'ASC')->paginate(10);
        
        return view('dashboard.anggota.bean-stock.index', compact('bean_stocks'));
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
            'name'   => 'required|string',
            'weight' => 'required|integer'
        ]);

        BeanStock::create([
            'name'    => $request->name,
            'weight'  => $request->weight,
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
        $bean_stock = BeanStock::findOrFail($id);

        return view('dashboard.anggota.bean-stock.edit', compact('bean_stock'));
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
            'name'   => 'required|string',
            'weight' => 'required|integer',
        ]);

        $bean_stock = BeanStock::findOrFail($id);

        $bean_stock->update([
            'name'   => $request->name,
            'weight' => $request->weight,
        ]);

        return redirect()->route('anggota.persediaan.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bean_stock = BeanStock::findOrFail($id);
        $bean_stock->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
