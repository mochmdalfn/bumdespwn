<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Jenisusaha;
use App\Models\Produkpertanian;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin_dasboard.dasboard', [
            'total_mitra' => Mitra::count(), 
            'total_jenis_usaha' => Jenisusaha::count(),
            'total_produk_pertanian' => Produkpertanian::count()
        ]);
    }

    public function hub()
    {
        return view('admin_dasboard.datahubungin');
    }
}
