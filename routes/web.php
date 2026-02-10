<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->except(['show']);;
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('barang', BarangController::class);

    
Route::get('/pelanggan', [PelangganController::class, 'index'])
    ->name('pelanggan.index');
});

Route::get('/users/cetak', [UserController::class, 'cetak'])
    ->name('users.cetak');



require __DIR__.'/auth.php';
