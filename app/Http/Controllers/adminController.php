<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('petugas.dasbor');
    }

    public function masuk(){
        return view('petugas.masuk');
    }

    public function cekmasuk(Request $request){
        $p = new petugas();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('/');
        }
        return back()->with('pesan','username dan password belum terdaftar');
    }

    public function siswa(){
        $siswa = new petugas();
        return view('petugas.siswa',['datasiswa'=>$siswa->all()]);
    }
    public function petugas(){
        $m = new petugas();
        return view('petugas.petugas',['data'=>$m->all()]);
    }
    public function cekdatapetugas(Request $request){
        $m = new petugas();
        $cek = $request->validate([
            'id_petugas'=>'required',
            'username'=>'unique',
            'password'=>'required',
            'nama_petugas'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
    public function kelas(){
        $a = new petugas();
        return view('petugas.kelas',['data'=>$a->all()]);
    }
    public function cekdatakelas(Request $request){
        $a = new petugas();
        $cek = $request->validate([
            'id_kelas'=>'required',
            'nama_kelas'=>'unique',
            'kompetensi_keahlian'=>'required'
        ]);
        $a->create($request->all());
        return back();
    }
    public function spp(){
        return view('petugas.spp');
    }

    
}
