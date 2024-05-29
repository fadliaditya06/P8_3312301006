<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/list_produk', [ListProdukController::class, 'show']);
Route::post('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/list_produk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');