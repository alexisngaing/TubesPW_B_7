<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminKonfirmasiSppController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::apiResource('spp', 'SppController');
    Route::post('spp/addToSpecificKelas/{id}', 'SppController@addToSpesificKelas');

    Route::apiResource('profil', 'profilController');
});

Route::middleware('auth:sanctum')->get('/admin', function (Request $request) {
    Route::apiResource('siswa', 'adminUserController');

    Route::apiResource('admin-home', 'HomeAdminController');

    Route::apiResource('home', 'HomeController');

    Route::apiResource('jadwal', 'JadwalController');

    Route::apiResource('login', 'loginController');

    Route::apiResource('index', 'pembayaranController');

    Route::apiResource('admin-konfirmasi-spp', 'Api\adminKonfirmasiSppController');
    Route::post('/web', 'Api\adminController@store');
    Route::apiResource('/admin-jadwal', 'Api\adminJadwalController');

    Route::post('/register', 'AuthController@actionRegister');
});


// Route::get('/admin/konfirmasi-spp', [adminKonfirmasiSppController::class, 'index']);
// Route::post('/web', 'Api\adminController@store');
// Route::apiResource('/admin-jadwal', 'Api\adminJadwalController');

// Route::apiResource('spp', 'SppController');
// Route::post('spp/addToSpecificKelas/{id}', 'SppController@addToSpesificKelas');

// Route::apiResource('siswa', 'adminUserController');

// Route::apiResource('admin-home', 'HomeAdminController');

// Route::apiResource('home', 'HomeController');

// Route::apiResource('jadwal', 'JadwalController');

// Route::apiResource('login', 'loginController');

// Route::apiResource('index', 'pembayaranController');

// Route::apiResource('profil', 'profilController');
// Route::post('/register', 'AuthController@actionRegister');

// Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
// Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'actionLogin'])->name('actionLogin');

// Route::get('home', [App\Http\Controllers\Api\HomeController::class, 'index']);
// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('home', [App\Http\Controllers\Api\HomeController::class, 'index']);
// });
