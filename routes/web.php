<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('/register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/mahasiswa/tampil', [MahasiswaController::class, 'tampilmahasiswa'])->name('tampilmahasiswa')->middleware('auth');
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa')->middleware('auth');
Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'simpanmahasiswa'])->name('simpanmahasiswa')->middleware('auth');
Route::get('/mahasiswa/ubah/{id_mahasiswa}',[MahasiswaController::class,'ubahmahasiswa'])->name('ubahmahasiswa')->middleware('auth');
Route::post('/mahasiswa/update', [MahasiswaController::class, 'updatemahasiswa'])->name('updatemahasiswa')->middleware('auth');
Route::get('/mahasiswa/hapus/{id_mahasiswa}',[MahasiswaController::class, 'hapusmahasiswa'])->name('hapusmahasiswa')->middleware('auth');