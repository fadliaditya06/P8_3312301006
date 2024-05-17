<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/list_produk', [ListProdukController::class, 'show']);
