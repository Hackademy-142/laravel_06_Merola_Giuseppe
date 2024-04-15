<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::post('/prodotti/create', [ProdottiController::class, 'store'])->name('prodottiStore');

Route::get('/prodotti/index', [ProdottiController::class, 'index'])->name('prodottiIndex');