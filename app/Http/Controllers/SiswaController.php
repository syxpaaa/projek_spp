<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.halaman');
    }
    public function login(){
        return view('siswa.login');
    }

    public function ceklogin(Request $request){
        $p = new siswa();
        if ($p->where('nisn',$request->input('nisn'))->exists()) {
            session(['nisn'=>$request->input('nisn')]);
            return redirect('pembayaranspp');
        }
        return back()->with('pesan','nisn salah!!');
    }

    
}
