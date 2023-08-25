<?php

use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->middleware(['auth', 'verified', 'auth_admin'])->group(function () {
    Route::get('/dashboard', [Admin\BerandaController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('/usaha-kategori', Admin\UsahaKategoriController::class, [
        'as' => 'admin'
    ]);
    Route::resource('/user', Admin\UserController::class, [
        'as' => 'admin'
    ]);
    Route::resource('/kelompok', Admin\KelompokController::class, [
        'as' => 'admin',
    ]);
    Route::post('/kelompok/anggota', [Admin\KelompokAnggotaController::class, 'store'])->name('admin.kelompok.anggota.store');
    Route::delete('/kelompok/anggota/{id}', [Admin\KelompokAnggotaController::class, 'destroy'])->name('admin.kelompok.anggota.destroy');
    Route::get('/kelompok/kewirausahaan', [User\KewirausahaanController::class, 'index'])->name('admin.kelompok.kewirausahaan.index');
    Route::post('/kelompok/kewirausahaan', [User\KewirausahaanController::class, 'store'])->name('admin.kelompok.kewirausahaan.store');
    Route::get('/kelompok/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'index'])->name('admin.kelompok.pemasaran-bisnis.index');
    Route::post('/kelompok/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'store'])->name('admin.kelompok.pemasaran-bisnis.store');
    Route::resource('/kelompok/penjualan', User\PenjualanController::class, [
        'as' => 'admin',
    ]);
    Route::get('/pengaturan', [Admin\PengaturanController::class, 'index'])->name('admin.pengaturan.index');
    Route::post('/pengaturan', [Admin\PengaturanController::class, 'store'])->name('admin.pengaturan.store');
    Route::post('/pengaturan/email', [Admin\PengaturanController::class, 'emailStore'])->name('admin.pengaturan.email.store');
});

Route::middleware(['auth', 'verified', 'auth_web'])->group(function () {
    Route::get('/dashboard', [User\BerandaController::class, 'index'])->name('user.dashboard.index');
    Route::post('/kelompok', [User\KelompokController::class, 'store'])->name('user.kelompok.store');
    Route::post('/kelompok/anggota', [User\KelompokAnggotaController::class, 'store'])->name('user.kelompok.anggota.store');
    Route::delete('/kelompok/anggota/{id}', [User\KelompokAnggotaController::class, 'destroy'])->name('user.kelompok.anggota.destroy');
    Route::get('/kewirausahaan', [User\KewirausahaanController::class, 'index'])->name('user.kewirausahaan.index');
    Route::post('/kewirausahaan', [User\KewirausahaanController::class, 'store'])->name('user.kewirausahaan.store');
    Route::get('/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'index'])->name('user.pemasaran-bisnis.index');
    Route::post('/pemasaran-bisnis', [User\PemasaranBisnisController::class, 'store'])->name('user.pemasaran-bisnis.store');
    Route::resource('/penjualan', User\PenjualanController::class, [
        'as' => 'user',
    ]);
    Route::get('/laporan', [User\LaporanController::class, 'index'])->name('user.laporan.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
