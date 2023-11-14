<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function login(){
        return view('siswa.login');
    }

    public function ceklogin(Request $request){
        $p = new siswa();
        //cek username dan password exists(ada)di tabel masyarakat
        if ($p->where('nis',$request->input('nis'))->where('password',$request->input('password'))->exists()) {
            session(['nis'=>$request->input('nis')]);
            return redirect('/');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    }
}
