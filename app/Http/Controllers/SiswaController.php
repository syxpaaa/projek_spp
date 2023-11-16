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
        if ($p->where('nisn',$request->input('nisn'))->exists()) {
            session(['nisn'=>$request->input('nisn')]);
            return redirect('/');
        }
        return back()->with('pesan','nisn salah!!');
    }

    
}
