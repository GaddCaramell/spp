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
Route::get('Pembayarantable',[SiswaController::class,'tablebayar']);


//Login & Simpan Login Petugas & Admin
Route::post('simpanPetu',[AdminController::class,'simpanPetu']);
Route::get('hapusPetu/{idp}',[AdminController::class,'hapusPetu']);
Route::get('loginpetu',[AdminController::class,'loginpetugas']);

//Login & Simpan Login Siswa
Route::get('LoginSiswa',[SiswaController::class,'loginSiswa']);
Route::get('LogoutSiswa',[SiswaController::class,'logoutSiswa']);

//CRUD Kelas
Route::post('simpanKelas',[SiswaController::class,'simpanKelas']);
Route::get('hapusKelas/{id}',[SiswaController::class,'hapusKelas']);
Route::get('editKelas/{id}',[SiswaController::class,'editKelas']);

//CRUD Siswa
Route::post('simpanSiswa',[SiswaController::class,'simpanSiswa']);
Route::get('hapusSiswa/{nisn}',[SiswaController::class,'hapusSiswa']);
Route::get('editSiswa/{nisn}',[SiswaController::class,'editSiswa']);

//CRUD Spp
Route::post('simpanSpp',[SiswaController::class,'simpanSpp']);
Route::get('hapusSpp/{ids}',[SiswaController::class,'hapusSpp']);
Route::get('editSpp/{ids}',[SiswaController::class,'editSpp']);

//CRUD pembayaran
Route::post('simpanBayar',[SiswaController::class,'simpanBayar']);
Route::get('hapusBayar/{idpembayaran}',[SiswaController::class,'hapusBayar']);
Route::get('editBayar/{idpembayaran}',[SiswaController::class,'editBayar']);


