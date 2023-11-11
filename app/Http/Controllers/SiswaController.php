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
        $aziz = new siswa();
        //cek username dan password exists(ada)di tabel masyarakat
        if ($aziz->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()) {
            session(['username'=>$request->input('username')]);
            return redirect('/');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');

    }
}
