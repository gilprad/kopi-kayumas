<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('group_id', '=', Auth::user()->group->id)->orderBy('created_at', 'ASC')->paginate(10);

        return view('dashboard.ketua.product.index', compact('products'));
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
            'image'       => 'required|image|mimes:png,jpeg,jpg',
            'name'        => 'required|string',
            'description' => 'required',
            'price'       => 'required|integer'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/product/' . $filename, file_get_contents($file));
        }

        Product::create([
            'image'       => $filename,
            'name'        => $request->name,
            'slug'        => strtolower($request->name),
            'description' => $request->description,
            'excerpt'     => Str::words(strip_tags(html_entity_decode($request->description)), 8),
            'price'       => $request->price,
            'group_id'    => Auth::user()->group->id
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
        $product = Product::findOrFail($id);

        return view('dashboard.ketua.product.edit', compact('product'));
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
            'image'       => 'image|mimes:png,jpeg,jpg',
            'name'        => 'required|string',
            'description' => 'required',
            'price'       => 'required|integer'
        ]);
        
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('local')->delete('public/product/' . $product->image);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/product/' . $filename, file_get_contents($file));

            $product->update([
                'image'       => $filename,
                'name'        => $request->name,
                'slug'        => strtolower($request->name),
                'description' => $request->description,
                'excerpt'     => Str::words(strip_tags(html_entity_decode($request->description)), 8),
                'price'       => $request->price
            ]);
        } else {
            $product->update([
                'name'        => $request->name,
                'slug'        => strtolower($request->name),
                'description' => $request->description,
                'excerpt'     => Str::words(strip_tags(html_entity_decode($request->description)), 8),
                'price'       => $request->price
            ]);
        }

        return redirect()->route('ketua.produk.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('local')->delete('public/product/' . $product->thumbnail);
        $product->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
