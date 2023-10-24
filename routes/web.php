<?php

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
    return view('home');
});


Route::get('/profile', function () {
    return view('/profile');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});

Route::get('/admin-home', function () {
    return view('admin-home');
});

Route::get('/manage-user', function () {
    return view('manage-user');
});

Route::get('/manage-spp', function () {
    return view('manage-spp');
});

Route::get('/home', function () {
    return view('home');
});
