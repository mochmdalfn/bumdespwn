<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indikator = Indikator::all();
        return view('admin_dasboard.indikator.dataindikator', compact('indikator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dasboard.indikator.formindikator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indikator = Indikator::create([
            'ang_mitra' => $request->ang_mitra,
            'ang_jnsusaha' => $request->ang_jnsusaha,
            'ang_insventasi' => $request->ang_insventasi,
            'ang_omzet' => $request->ang_omzet,
        ]);
        //dd($indikator);
        return redirect()->route('admin.indikator.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indikator  $indikator
     * @return \Illuminate\Http\Response
     */
    public function show(Indikator $indikator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indikator  $indikator
     * @return \Illuminate\Http\Response
     */
    public function edit(Indikator $indikator)
    {
        return view('admin_dasboard.indikator.ubahformindikator', compact('indikator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indikator  $indikator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indikator $indikator)
    {
        $indikator->update([
            'ang_mitra' => $request->ang_mitra,
            'ang_jnsusaha' => $request->ang_jnsusaha,
            'ang_insventasi' => $request->ang_insventasi,
            'ang_omzet' => $request->ang_omzet,
        ]);
        //dd($indikator);
        return redirect()->route('admin.indikator.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indikator  $indikator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indikator $indikator)
    {
        try {
            $indikator->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch(\Throwable $th) {
            return back()->withError('Data gagal dihapus karena berketergantungan dengan tabel lain');
        }
    }
}
