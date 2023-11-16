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

//DashAdmin
Route::get('/',function () {
    return view('LayoutUtama/index2');
    });

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
Route::get('LoginSiswa',[SiswaController::class,'']);
Route::post('simpanLoginSiswa',[SiswaController::class,'']);
Route::get('LogoutSiswa',[SiswaController::class,'']);

