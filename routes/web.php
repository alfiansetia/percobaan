<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/reload-captcha', function () {
    return response()->json(['captcha'=> captcha_src()]);
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/kategori/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori/{id}', [KategoriController::class, 'destroy']);

    Route::get('/visi', function () {
        return view('visi');
    })->name('visi');

    Route::get('/peminjaman', [PeminjamanController::class, 'index']);
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store']);
    Route::get('/peminjaman/{id}', [PeminjamanController::class, 'destroy']);
    
    
    
});