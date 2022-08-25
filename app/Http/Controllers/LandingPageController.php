<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Mitra;
use App\Models\Jenisusaha;
use App\Models\Ulasan;
use App\Models\Produkpertanian;
use App\Models\Tentangkami;
use App\Http\Controllers;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('faq', [
            'produkpertanian' => Produkpertanian::all(),
            'ulasan' => Ulasan::all(),
            'total_ulasan' => Ulasan::count(),
            'total_mitra' => Mitra::count(),
            'total_jenis_usaha' => Jenisusaha::count(),
            'total_produk_pertanian' => Produkpertanian::count()
        ]);
    }

    public function post()
    { 
        return view('posts', [
            "title" => "Post Artikel", 
            "posts" => Post::with(['author', 'category'])->latest()->get() 
        ]); 
    }
    public function tentangkami()
    {
        return view('tentangkami',[ "tentangkami" => Tentangkami::all() ]); 
    }

    public function mitra()
    {

        return view('mitra', ['mitra'=> Mitra::all()]);
    }
    
    public function show (post $post)
    { 
        return view('post', [ "post" => $post ]); 
    }
}
