<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

/**
 * Request Structure
 *
 * Header
 * Body
 */

// Route::get('/hello', function() {
//     return redirect('/mahasiswa');
// });

// Route::get('/redirect-to-mahasiswa', [MahasiswaController::class, 'redirectHere']);
