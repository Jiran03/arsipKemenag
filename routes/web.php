<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kKlasifikasiController;
use App\Http\Controllers\cetakArsipController;

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


Route::get('/inputarsip',[App\Http\Controllers\kKlasifikasiController::class, 'index'])->name('input');

Route::post('/inputarsip/tambahData',[App\Http\Controllers\kKlasifikasiController::class, 'validTambahData']);

Route::get('/cetakDIB', [App\Http\Controllers\cetakArsipController::class, 'indexDIB'])->name('cetakDIB');

Route::get('/cetakDB', [App\Http\Controllers\cetakArsipController::class, 'indexDB'])->name('cetakDB');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
