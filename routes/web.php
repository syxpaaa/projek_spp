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

//petugas
Route::get('siswa',[AdminController::class,'siswa']);
    
