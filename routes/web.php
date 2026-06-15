<?php
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');

Route::post('/create-blog', [HomeController::class, 'createBlog'])->name('create-blog');
