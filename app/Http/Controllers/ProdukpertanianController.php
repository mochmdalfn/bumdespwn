<?php

namespace App\Http\Controllers;

use App\Models\Produkpertanian;
use Illuminate\Http\Request;

class ProdukpertanianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkpertanian = Produkpertanian::all();
        return view('admin_dasboard.produkpertanian.dataprodukper', compact('produkpertanian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dasboard.produkpertanian.formprodukper');
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

        $produkper = Produkpertanian::create([
            'name' => $request->name,
            'gambar' => $gambar
        ]);
        //dd($jenisusaha);
        return redirect()->route('admin.produkpertanian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkpertanian  $produkpertanian
     * @return \Illuminate\Http\Response
     */
    public function show(Produkpertanian $produkpertanian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produkpertanian  $produkpertanian
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkpertanian $produkpertanian)
    {
        return view('admin_dasboard.produkpertanian.ubahformprodukper', compact('produkpertanian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produkpertanian  $produkpertanian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkpertanian $produkpertanian)
    {
        if($request->hasFile('gambar')){
            unlink(public_path($mitra->gambar));
            $gambar = $request->file('gambar')->store('images');
        }

        $produkpertanian->update([
            'name' => $request->name,
            'gambar' => $gambar
        ]);
        //dd($produkper);
        return redirect()->route('admin.produkpertanian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produkpertanian  $produkpertanian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkpertanian $produkpertanian)
    {
        try {
            unlink(public_path('images/'.$mitra->gambar));
            $produkpertanian->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
