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
        return view('admin.dasbor');
    }

    public function masuk(){
        return view('admin.masuk');
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


    //PETUGAS
    public function petugas(){
        $m = new petugas();
        return view('petugas.petugas',['data'=>$m->all()]);
    }
    public function Tambahpetugas(){
        return view("petugas.tambahpetugas");
    }
    public function simpen(request $request){
        $p =new petugas();
        $cek=$request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required',
           'level'=>'required'
        ]);
        $p->create($request->all());
            return back()->with('pesan','tambah petugas berhasil');
    }

    public function hapus($id){
        $petugas = new petugas();
        $petugas = $petugas->find($id);
        $petugas->delete();
        return back();
    }

    public function edit($id){
        $petugas = new petugas();
        return view('petugas.editpetugas',['editpet'=>$petugas->find($id)]);
    }
    public function update(Request $request,$id){
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level'=> 'required'
        ]);
        
        $petugas = new petugas();
        $petugas = $petugas->find($id)->update($request->all());;
       
        return redirect('/admin/petugas')->with('Pesan','Update Data Berhasil');;
    }


    //KELAS
    public function kelas(){
        $m = new kelas();
        return view('kelas.kelas',['data'=>$m->all()]);
    }
    public function tambahkelas(){
        return view('kelas.tambahpetugas');
    }
   public function cektambahkelas(Request $request){ 
        $cek = $request->validate([
            'id_kelas'=>'required',
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required'
        ]);
        $m = new Kelas();
        $m->create($request->all());
        return redirect('data');        
    }
    

    //SISWA
    public function siswa(){
        $m = new siswa();
        return view('murid.siswa',['data'=>$m->all()]);
    }


    //SPP
    public function spp(){
        $m = new spp();
        return view('spp.spp',['data'=>$m->all()]);
    }
   


    public function keluar(){
        session()->flush();
        return back();
    }
}
