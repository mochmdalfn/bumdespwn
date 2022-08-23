<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin_dasboard.berita.databerita', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dasboard.berita.formberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->title,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'gambar' => $request->gambar
        ]);

        //dd($post);
        return redirect()->route('admin.berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin_dasboard.berita.ubahformberita');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'slug' => $request->title,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'gambar' => $request->gambar
        ]);

        //dd($post);
        return redirect()->route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
