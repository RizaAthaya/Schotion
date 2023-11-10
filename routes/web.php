<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;


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


Route::prefix('scholarship')->group(function () {
    Route::get('/', [BeasiswaController::class, 'show'])->name('scholarship.show');
    Route::get('/createScholar', [BeasiswaController::class, 'create'])->name('scholarship.create');
    Route::post('/', [BeasiswaController::class, 'store'])->name('scholarship.store');
    Route::delete('/{id}', [BeasiswaController::class, 'destroy'])->name('scholarship.destroy');
});


// rute admin

// rute mahasiswa
