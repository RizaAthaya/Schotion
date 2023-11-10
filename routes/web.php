<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\LombaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Rute testing
Route::get('/', function () {
    return view('welcome');
});

// rute admin
Route::prefix('scholarship')->group(function () {
    Route::put('/update/{id}', [BeasiswaController::class, 'update'])->name('scholarship.update');
    Route::get('/', [BeasiswaController::class, 'show'])->name('scholarship.show');
    Route::get('/edit/{id}', [BeasiswaController::class, 'edit'])->name('scholarship.edit');
    Route::get('/create', [BeasiswaController::class, 'create'])->name('scholarship.create');
    Route::post('/store', [BeasiswaController::class, 'store'])->name('scholarship.store');
    Route::delete('/delete/{id}', [BeasiswaController::class, 'destroy'])->name('scholarship.destroy');
});

Route::prefix('competition')->group(function () {
    Route::put('/update/{id}', [LombaController::class, 'update'])->name('competition.update');
    Route::get('/', [LombaController::class, 'show'])->name('competition.show');
    Route::get('/edit/{id}', [LombaController::class, 'edit'])->name('competition.edit');
    Route::get('/create', [LombaController::class, 'create'])->name('competition.create');
    Route::post('/store', [LombaController::class, 'store'])->name('competition.store');
    Route::delete('/delete/{id}', [LombaController::class, 'destroy'])->name('competition.destroy');
});

// rute mahasiswa
