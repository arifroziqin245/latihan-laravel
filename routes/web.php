<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
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

Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => "About",
            'active' => 'about',
            "name" => "Arif Roziqin",
            "email" => "arifroziqin2405@gmail.com",
            "image" => "gal1.jpg"
        ]
    );
});


Route::get('/blog', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// halaman semua category
Route::get('categories', function(){
    return view('categories', [
        'active' => 'categories',
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// route login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// route registrasi
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// route setelah login / Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index'); 
})->middleware('auth');

// route resource CRUD
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
