<?php

use App\Http\Controllers\User;
use App\Http\Controllers\ProfileController;
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
    return view('home.index');
});

Route::prefix('/admin')->middleware(['auth', 'verified', 'auth_admin'])->group(function () {
    Route::get('/dashboard', [User\BerandaController::class, 'index'])->name('admin.dashboard.index');
});

Route::middleware(['auth', 'verified', 'auth_web'])->group(function () {
    Route::get('/dashboard', [User\BerandaController::class, 'index'])->name('user.dashboard.index');
    Route::get('/kewirausahaan', [User\KewirausahaanController::class, 'index'])->name('user.kewirausahaan.index');
    Route::get('/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'index'])->name('user.pemasaran-bisnis.index');
    Route::get('/penjualan', [User\PenjualanController::class, 'index'])->name('user.penjualan.index');
    Route::get('/laporan', [User\LaporanController::class, 'index'])->name('user.laporan.index');

    Route::post('/kelompok', [User\KelompokController::class, 'store'])->name('user.kelompok.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
