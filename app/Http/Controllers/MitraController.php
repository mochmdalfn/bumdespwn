<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = Mitra::all();
        return view('admin_dasboard.mitra.datamitra', compact('mitra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dasboard.mitra.formmitra');
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
            $gambar = $request->file('gambar')->store('images');
        }

        $mitra = Mitra::create([
            'pemilik' => $request->pemilik,
            'nmmitra' => $request->mitra,
            'jnsusaha' => $request->jnsusaha,
            'alamat' => $request->alamat,
            'gambar' => $gambar ?? NULL
        ]);
        //dd($mitra);
        return redirect()->route('admin.mitra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view('admin_dasboard.mitra.ubahformmitra', compact('mitra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        if($request->hasFile('gambar')){
            unlink(public_path($post->gambar));
            $gambar = $request->file('gambar')->store('images');
        }

        $mitra->update([
            'pemilik' => $request->pemilik,
            'nmmitra' => $request->mitra,
            'jnsusaha' => $request->jnsusaha,
            'alamat' => $request->alamat,
            'gambar' => $gambar
        ]);
        //dd($mitra);
        return redirect()->route('admin.mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        try {
            $mitra->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
