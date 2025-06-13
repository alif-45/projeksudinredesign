<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SudinsosController;

Route::prefix('modul/sudinsos')->group(function () {
    Route::get('/', [SudinsosController::class, 'beranda'])->name('sudinsos.beranda');
    Route::get('/profil', [SudinsosController::class, 'profil'])->name('sudinsos.profil');
    Route::get('/pelayanan', [SudinsosController::class, 'pelayanan'])->name('sudinsos.pelayanan');
    Route::get('/berita', [SudinsosController::class, 'berita'])->name('sudinsos.berita');
    Route::get('/modul/sudinsos/berita/{id}', [SudinsosController::class, 'showBerita'])->name('sudinsos.berita.show');

});
