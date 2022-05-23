<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->paginate(10);

        return view('dashboard.ketua.blog.index', compact('blogs'));
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
            'thumbnail' => 'required|image|mimes:png,jpeg,jpg',
            'title'     => 'required|string',
            'contents'  => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/thumbnail/' . $filename, file_get_contents($file));
        }

        Blog::create([
            'thumbnail' => $filename,
            'title'     => $request->title,
            'slug'      => Str::slug($request->title),
            'contents'  => $request->contents,
            'excerpt'   => Str::words(strip_tags(html_entity_decode($request->contents)), 8)
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
        $blog = Blog::findOrFail($id);

        return view('dashboard.ketua.blog.edit', compact('blog'));
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
            'thumbnail' => 'image|mimes:png,jpeg,jpg',
            'title'     => 'required|string',
            'contents'  => 'required'
        ]);
        
        $blog = Blog::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            Storage::disk('local')->delete('public/thumbnail/' . $blog->thumbnail);
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/thumbnail/' . $filename, file_get_contents($file));

            $blog->update([
                'thumbnail' => $filename,
                'title'     => $request->title,
                'slug'      => Str::slug($request->title),
                'contents'  => $request->contents,
                'excerpt'   => Str::words(strip_tags(html_entity_decode($request->contents)), 8)
            ]);
        } else {
            $blog->update([
                'title'    => $request->title,
                'slug'     => Str::slug($request->title),
                'contents' => $request->contents,
                'excerpt'  => Str::words(strip_tags(html_entity_decode($request->contents)), 8)
            ]);
        }

        return redirect()->route('ketua.berita.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::disk('local')->delete('public/thumbnail/' . $blog->thumbnail);
        $blog->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
