<?php

namespace App\Http\Controllers;

use App\Models\Jenisusaha;
use Illuminate\Http\Request;

class JenisusahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisusaha = Jenisusaha::all();
        return view('admin_dasboard.jenisusaha.datajenisusaha', compact('jenisusaha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dasboard.jenisusaha.formjenisusaha');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisusaha = Jenisusaha::create([
            'name' => $request->name,
            'penjelasan' => $request->penjelasan
        ]);
        //dd($jenisusaha);
        return redirect()->route('admin.jenisusaha.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenisusaha  $jenisusaha
     * @return \Illuminate\Http\Response
     */
    public function show(Jenisusaha $jenisusaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenisusaha  $jenisusaha
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenisusaha $jenisusaha)
    {
        return view('admin_dasboard.jenisusaha.ubahformjenisusaha', compact('jenisusaha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenisusaha  $jenisusaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenisusaha $jenisusaha)
    {
        $jenisusaha->update([
            'name' => $request->name,
            'penjelasan' => $request->penjelasan
        ]);
        //dd($jenisusaha);
        return redirect()->route('admin.jenisusaha.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenisusaha  $jenisusaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenisusaha $jenisusaha)
    {
        try {
            $jenisusaha->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
