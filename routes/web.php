<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\JenisusahaController;
use App\Models\Post;
use App\Models\category;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukpertanianController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/mitra', [LandingPageController::class, 'mitra']);
Route::get('/tentangkami', [LandingPageController::class, 'tentangkami']);
Route::get('/posts', [LandingPageController::class, 'post']);
Route::get('posts/{post:slug}', [LandingPageController::class, 'show']);
Route::get('categories', function (){
    return view('categories',[
        'title' => 'Categories',
        'categories' => category::all()
    ]);
});
Route::get('categories/{category:slug}', function (category $category){
    return view('posts',[
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','author'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/register', [UserController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('hubungi', [DashboardController::class, 'hub']);
    Route::resource('post', PostController::class);
    Route::resource('mitra', MitraController::class);
    Route::resource('jenisusaha', JenisusahaController::class);
    Route::resource('indikator', IndikatorController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('produkpertanian', ProdukpertanianController::class);
    Route::resource('team', TeamController::class);
    Route::resource('user', UserController::class);
});

Route::get('/authors/{author:username}', function (User $author){
    return view('posts',[
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});

Route::get('/kontak', function () {
    return view('kontak');
});





