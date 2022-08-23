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
        $produkpertanian = Produkpertanian::create([
            'name' => $request->name,
            'gambar' => $request->gambar
        ]);
        //dd($produkpertanian);
        return redirect()->route('admin.mitra.index');
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
        $produkpertanian->update([
            'name' => $request->name,
            'gambar' => $request->gambar
        ]);
        //dd($produkpertanian);
        return redirect()->route('admin.mitra.index');
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
            $produkpertanian->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
