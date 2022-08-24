<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $categories = Category::all();
        return view('admin_dasboard.berita.formberita', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $gambar  = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images'), $gambar);
        }

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
            'gambar' => $gambar
        ]);

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('Data berhasil ditambahkan');;
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
        $categories = Category::all();
        return view('admin_dasboard.berita.ubahformberita', compact('post', 'categories'));
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
        $gambar = $post->gambar;

        if($request->hasFile('gambar')){
            unlink(public_path($post->gambar));
            $gambar = $request->file('gambar')->store('images');
        }

        $post->update([
            'title' => $request->title,
            'slug' => $request->title,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
            'gambar' => $post->gambar
        ]);

        //dd($post);

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('Data berhasil diubah');
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
            unlink(public_path('images/'.$post->gambar));
            $post->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
