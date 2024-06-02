<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/barang', [BarangController::class, 'index'])->name('barang_index');
Route::get('/input', [BarangController::class, 'input'])->name('barang_input');
Route::post('/hasil', [BarangController::class, 'store'])->name('barang_store');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang_destroy');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang_edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang_update');
