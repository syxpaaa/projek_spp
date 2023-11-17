<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\petugas;
use App\Models\siswa;
use App\Models\spp;
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
        $m = new kelas();
        return view('petugas.kelas',['data'=>$m->all()]);
    }
    public function cekdatakelas(Request $request){
        $m = new kelas();
        $cek = $request->validate([
            'id_kelas'=>'required',
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required'
        ]);
        $m->create($request->all());
        return back();
    }
    
    public function siswa(){
        $m = new siswa();
        return view('petugas.siswa',['data'=>$m->all()]);
    }
    public function cekdatasiswa(Request $request){
        $m = new siswa();
        $cek = $request->validate([
            'nisn'=>'required',
            'nis'=>'unique',
            'nama'=>'required',
            'id_kelas'=>'unique',
            'alamat'=>'unique',
            'no_telp'=>'unique',
            'id_spp'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
    public function spp(){
        $m = new spp();
        return view('petugas.spp',['data'=>$m->all()]);
    }
    public function cekdataspp(Request $request){
        $m = new siswa();
        $cek = $request->validate([
            'id_spp'=>'required',
            'tahun'=>'unique',
            'nominal'=>'required'
        ]);
        $m->create($request->all());
        return back();
    }
}
