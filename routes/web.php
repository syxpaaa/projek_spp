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
//layout
Route::get('/', [AdminController::class,'index']);

//login 
Route::get('login',[SiswaController::class,'login']);
Route::post('login',[SiswaController::class,'ceklogin']);
Route::get('masuk',[adminController::class,'masuk']);
Route::post('masuk',[adminController::class,'cekmasuk']);

//logout
Route::get('keluar',[adminController::class,'keluar']);

//petugas
Route::get('tambahpetugas',[AdminController::class,'tambahpetugas']);
Route::post('simpan',[AdminController::class,'simpan']);
Route::get('petugas',[AdminController::class,'petugas']);

//murid
Route::get('siswa',[AdminController::class,'siswa']);

//kelas
Route::get('kelas',[AdminController::class,'kelas']);
Route::post('kelas',[AdminController::class,'cekdatakelas']);
Route::get('tambahkelas',[AdminController::class,'tambahkelas']);
Route::post('tambahkelas',[AdminController::class,'cektambahkelas']);

//spp
Route::get('spp',[AdminController::class,'spp']);
