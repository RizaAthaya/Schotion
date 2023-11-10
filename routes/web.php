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


Route::get('/scholarInformation', [BeasiswaController::class, 'showScholar']);


// create 
Route::get('/scholarInformation/createScholar', [BeasiswaController::class, 'createScholar']);
Route::post('/scholarInformation', [BeasiswaController::class, 'store']);

Route::delete('/scholarInformation/{id}', [BeasiswaController::class, 'destroy']);


// rute admin

// rute mahasiswa
