<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\cekAdmin;
use App\Http\Middleware\ValidasiAdmin;
use App\Http\Middleware\ValidasiSiswa;
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
Route::get('pembayaranspp',[SiswaController::class,'index']);

//login 
Route::get('login',[SiswaController::class,'login']);
Route::post('login',[SiswaController::class,'ceklogin']);
Route::get('masuk',[adminController::class,'masuk']);
Route::post('masuk',[adminController::class,'cekmasuk']);

//logout
Route::get('keluar',[adminController::class,'keluar']);

//petugas
Route::get('Tambahpetugas',[AdminController::class,'Tambahpetugas']);
Route::post('Tambahpetugas',[AdminController::class,'cektambahpetugas']);
Route::get('petugas',[AdminController::class,'petugas']);
Route::get('hapus/{id}',[adminController::class,'hapus']);
Route::get('edit/{id}',[AdminController::class,'edit']);
Route::post('edit/{id}',[AdminController::class,'update']);

//murid
Route::get('siswa',[AdminController::class,'siswa']);
Route::get('Tambasiswa',[AdminController::class,'Tambahsiswa']);
Route::post('Tambasiswa',[AdminController::class,'cektambahsiswa']);
Route::get('hps/{nisn}',[adminController::class,'hps']);
Route::get('updat/{nisn}',[AdminController::class,'updat']);
Route::post('updat/{nisn}',[AdminController::class,'up']);

//kelas
Route::get('kelas',[AdminController::class,'kelas']);
Route::post('kelas',[AdminController::class,'cekdatakelas']);
Route::get('Tambahkelas',[AdminController::class,'Tambahkelas']);
Route::post('Tambahkelas',[AdminController::class,'cektambahkelas']);
Route::get('editt/{id}',[AdminController::class,'editt']);
Route::post('editt/{id}',[AdminController::class,'upd']);
Route::get('hapuss/{id}',[adminController::class,'hapuss']);

//spp
Route::get('spp',[AdminController::class,'spp']);
Route::get('Tambahspp',[AdminController::class,'Tambahspp']);
Route::post('Tambahspp',[AdminController::class,'cektambahspp']);
Route::get('hapusss/{id}',[adminController::class,'hapusss']);
Route::get('edittt/{id}',[AdminController::class,'edittt']);
Route::post('edittt/{id}',[AdminController::class,'upda']);

//transaksi
Route::get('transaksi',[adminController::class,'transaksi']);
Route::post('simpan',[adminController::class,'simpan']);

//pembayaran
Route::get('pembayaran',[adminController::class,'pembayaran']);
