<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quilombola.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cultura', function () {
    return view('quilombola.cultura');
})->name('cultura');

Route::get('/economia', function () {
    return view('quilombola.economia');
})->name('economia');

Route::get('/historia', function () {
    return view('quilombola.historia');
})->name('historia');

Route::get('/lideres', function () {
    return view('quilombola.lideres');
})->name('lideres');

Route::get('/lutas-direitos', function () {
    return view('quilombola.lutasdireitos');
})->name('lutasdireitos');

Route::get('mapa', function () {
    return view('quilombola.mapa');
})->name('mapa');

Route::get('/noticias', function () {
    return view('quilombola.noticias');
})->name('lideres');

Route::get('onde-estao', function () {
    return view('quilombola.ondeestao');
})->name('ondeestao');

Route::get('/sobre', function () {
    return view('quilombola.sobre');
})->name('sobre');

require __DIR__.'/auth.php';
