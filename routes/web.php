<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Interface
Route::get('DashAdmin',[AdminController::class,'adminDash']);
// Route::get('TambahSiswa',[SiswaController::class,'tambahSiswaUI']);

//Table
Route::get('Siswatable',[SiswaController::class,'tablesiswa']);
Route::get('Petugastable',[AdminController::class,'tablepetugas']);
Route::get('Kelastable',[SiswaController::class,'tablekelas']);
Route::get('Spptable',[SiswaController::class,'tablespp']);


//Login & Simpan Login Petugas & Admin
Route::get('loginpetu',[AdminController::class,'loginpetugas']);
Route::post('simpanLoginPetu',[AdminController::class,'cekLoginPetu']);
Route::get('simpanLoginPetu',[AdminController::class,'logoutPetu']);

//Login & Simpan Login Siswa
Route::get('LoginSiswa',[SiswaController::class,'loginSiswa']);
Route::get('LogoutSiswa',[SiswaController::class,'logoutSiswa']);

//CRUD Kelas
Route::post('simpanKelas',[SiswaController::class,'simpanKelas']);
Route::get('hapusKelas/{id}',[SiswaController::class,'hapusKelas']);

//CRUD Siswa
Route::post('simpanSiswa',[SiswaController::class,'simpanSiswa']);
Route::get('hapusSiswa/{nisn}',[SiswaController::class,'hapusSiswa']);

