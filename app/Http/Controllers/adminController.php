<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('petugas.dasbor');
    }

    public function login(){
        return view('siswa.login');
    }

    public function ceklogin(Request $request){
        $p = new petugas();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('petugas');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    }

    public function siswa(){
        return view('petugas.siswa');
    }
}
