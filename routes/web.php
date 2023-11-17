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


//petugas
Route::get('siswa',[AdminController::class,'siswa']);
Route::get('kelas',[AdminController::class,'kelas']);
Route::post('kelas',[AdminController::class,'cekdatakelas']);
Route::get('petugas',[AdminController::class,'petugas']);
Route::post('petugas',[AdminController::class,'cekdatapetugas']);
Route::get('spp',[AdminController::class,'spp']);