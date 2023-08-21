<?php

use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
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
    Route::get('/dashboard', [Admin\BerandaController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('/usaha-kategori', Admin\UsahaKategoriController::class, [
        'as' => 'admin'
    ]);
});

Route::middleware(['auth', 'verified', 'auth_web'])->group(function () {
    Route::get('/dashboard', [User\BerandaController::class, 'index'])->name('user.dashboard.index');
    Route::get('/kewirausahaan', [User\KewirausahaanController::class, 'index'])->name('user.kewirausahaan.index');
    Route::post('/kewirausahaan', [User\KewirausahaanController::class, 'store'])->name('user.kewirausahaan.store');
    Route::get('/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'index'])->name('user.pemasaran-bisnis.index');
    Route::post('/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'store'])->name('user.pemasaran-bisnis.store');
    Route::get('/penjualan', [User\PenjualanController::class, 'index'])->name('user.penjualan.index');
    Route::get('/penjualan/create', [User\PenjualanController::class, 'create'])->name('user.penjualan.create');
    Route::get('/laporan', [User\LaporanController::class, 'index'])->name('user.laporan.index');

    Route::post('/kelompok', [User\KelompokController::class, 'store'])->name('user.kelompok.store');
    Route::post('/kelompok/anggota', [User\KelompokAnggotaController::class, 'store'])->name('user.kelompok.anggota.store');
    Route::delete('/kelompok/anggota/{id}', [User\KelompokAnggotaController::class, 'destroy'])->name('user.kelompok.anggota.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
