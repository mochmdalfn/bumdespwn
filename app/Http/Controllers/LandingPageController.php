<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers;
use App\Models\Tentangkami;


class LandingPageController extends Controller
{
    public function index()
    {
        return view('faq');
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
    
    public function show (post $post)
    { 
        return view('post', [ "post" => $post ]); 
    }
}
