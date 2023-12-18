<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\AdminSPPController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminKonfirmasiSPPController;
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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');


Route::get('/forgetPass', function () {
    return view('forgetPass');
});

Route::post('actionForget', [ProfileController::class, 'actionForget'])->name('actionForget'); 
Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal')->middleware('auth');
Route::get('pembayaran/{nis}', [PembayaranController::class, 'index'])->name('pembayaran')->middleware('auth');

// Admin
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::post('loginAdmin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::get('admin-home', [HomeAdminController::class, 'index'])->name('admin-home')->middleware('auth:admin');

Route::get('manage-user', [AdminUserController::class, 'index'])->name('manage-user')->middleware('auth:admin');
Route::get('manage-spp', [AdminSPPController::class, 'index'])->name('manage-spp')->middleware('auth:admin');
Route::post('manage-spp/addToSpesificKelas/{id}', [AdminSPPController::class, 'addToSpesificKelas'])->name('addToSpesificKelas')->middleware('auth:admin');

Route::get('admin-konfirmasi-spp', [AdminKonfirmasiSPPController::class, 'index'])->name('admin-konfirmasi-spp')->middleware('auth:admin');
