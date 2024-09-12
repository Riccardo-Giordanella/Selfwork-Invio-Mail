<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CreatorsController;

// Rotte nominali
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get('/chi-siamo', [CreatorsController::class, 'chiSiamo'])->name('chi.siamo');

Route::get('/articoli', [ArticleController::class, 'articoli'])->name('articoli');

// Rotta parametrica
Route::get('/chi-siamo/dettaglio/{name}', [CreatorsController::class, 'dettaglio'])->name('dettaglio');
