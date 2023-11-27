<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PenggunaController;


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

// admin
// Route::middleware(['auth', 'checkrole:admin'])->prefix('admin')->group(function () {
    Route::prefix('admin')->group(function () {

    // scholarships
    Route::prefix('scholarship')->group(function () {
        Route::get('/', [BeasiswaController::class, 'show'])->name('admin.scholarship.show');
        Route::get('/edit/{id}', [BeasiswaController::class, 'edit'])->name('admin.scholarship.edit');
        Route::get('/create', [BeasiswaController::class, 'create'])->name('admin.scholarship.create');
        Route::put('/update/{id}', [BeasiswaController::class, 'update'])->name('admin.scholarship.update');
        Route::post('/store', [BeasiswaController::class, 'store'])->name('admin.scholarship.store');
        Route::delete('/delete/{id}', [BeasiswaController::class, 'destroy'])->name('admin.scholarship.destroy');
    });

    // competitions
    Route::prefix('competition')->group(function () {
        Route::get('/', [LombaController::class, 'show'])->name('admin.competition.show');
        Route::get('/edit/{id}', [LombaController::class, 'edit'])->name('admin.competition.edit');
        Route::get('/create', [LombaController::class, 'create'])->name('admin.competition.create');
        Route::put('/update/{id}', [LombaController::class, 'update'])->name('admin.competition.update');
        Route::post('/store', [LombaController::class, 'store'])->name('admin.competition.store');
        Route::delete('/delete/{id}', [LombaController::class, 'destroy'])->name('admin.competition.destroy');
    });

    // account
    Route::prefix('account')->group(function () {
        Route::get('/', [PenggunaController::class, 'show'])->name('admin.account.show');
        Route::get('/edit/{id}', [PenggunaController::class, 'edit'])->name('admin.account.edit');
        Route::get('/create', [PenggunaController::class, 'create'])->name('admin.account.create');
        Route::put('/update/{id}', [PenggunaController::class, 'update'])->name('admin.account.update');
        Route::post('/store', [PenggunaController::class, 'store'])->name('admin.account.store');
        Route::delete('/delete/{id}', [PenggunaController::class, 'destroy'])->name('admin.account.destroy');
    });
});
// })->middleware('checkrole');;


// rute mahasiswa
Route::prefix('auth')->group(function () {
    // Rute-rute untuk otentikasi
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
        Route::post('/login', [AuthController::class, 'login']);
        Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
        Route::post('/register', [AuthController::class, 'register']);
    });

    // Rute untuk logout hanya bisa diakses oleh pengguna yang sudah login
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
        // Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('auth.logout');
    });
});




Route::get('/competition', [LombaController::class, 'showCompetition']);
Route::post('/competition/search', [LombaController::class, 'searchCompetition'])->name('search.competition');


Route::get('/scholarship', [BeasiswaController::class, 'showScholarship']);
Route::post('/scholarship/search', [BeasiswaController::class, 'searchScholarship'])->name('search.scholarship');

Route::get('/scholarship/detail/{id}', [BeasiswaController::class, 'showDetail'])->name('scholarship.detail');


