<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {

    Route::middleware('auth')->get('/profile', [ProfileController::class, 'show'])->name('profile');

    Route::resource('mobil', MobilController::class);
    Route::get('mobil/laporan/cetak', [MobilController::class, 'laporan']);

    Route::resource('pengguna', PenggunaController::class);
    Route::get('pengguna/laporan/cetak', [PenggunaController::class, 'laporan']);

    Route::resource('transaksi', TransaksiController::class);
    Route::get('transaksi/laporan/cetak', [TransaksiController::class, 'laporan']);

});