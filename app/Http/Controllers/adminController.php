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
        $p = new petugas();
        return view('petugas.petugas',['data'=>$p->all()]);
    }
    public function Tambahpetugas(){
        return view("petugas.tambahpetugas");
    }
    public function cektambahpetugas(Request $request){ 
        $cek = $request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required'
        ]);
        $m = new Petugas();
        $m->create($request->all());
        return redirect('petugas');        
    }

    public function hapus($id){
        $p = new petugas();
        $p = $p->find($id);
        $p->delete();
        return back();
    }

    public function edit($id){
        $p = new petugas();
        return view('petugas.editpetugas',['editpet'=>$p->find($id)]);
    }
    public function update(Request $request,$id){
        $p = new petugas();
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level'=> 'required'
        ]);
        $p = $p->find($id)->update($request->all());
        return redirect('petugas')->with('Pesan','Update Data Berhasil');
    }

    //SISWA
    public function siswa(){
        $s = new siswa();
        return view('murid.siswa',['data'=>$s->all()]);
    }
    public function Tambahsiswa(){
        return view("murid.tambahsiswa");
    }
    public function cektambahsiswa(Request $request){ 
        $s = new siswa();
        $cek = $request->validate([
            'nisn'=>'required',
            'nis'=>'required',
            'nama'=>'required',
            'id_kelas'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'id_spp'=>'required'
        ]);
        $s->create($request->all());
        return redirect('siswa');        
    }

     public function hps($nisn){
        $s = new siswa();
        $s = $s->find($nisn);
        $s->delete();
        return back();
     }

     public function updat($nisn){
         $s = new siswa();
         return view('murid.editsiswa',['editsis'=>$s->find($nisn)]);
     }
     public function up(Request $request,$nisn){
         $s = new siswa();
         $validasi = $request->validate([
            'nisn'=>'required',
            'nis'=>'required',
            'nama'=>'required',
            'id_kelas'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'id_spp'=>'required'
    ]);
         $s = $s->find($nisn)->update($request->all());
         return redirect('siswa')->with('Pesan','Update Data Berhasil');
     }

    //KELAS
    public function kelas(){
        $m = new kelas();
        return view('kelas.kelas',['data'=>$m->all()]);
    }
    public function Tambahkelas(){
        return view("kelas.tambahkelas");
    }
    public function cektambahkelas(Request $request){ 
        $cek = $request->validate([
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required'
        ]);
        $m = new kelas();
        $m->create($request->all());
        return redirect('kelas');        
    }
    public function editt($id){
        $p = new kelas();
        return view('kelas.editkelas',['updatekel'=>$p->find($id)]);
    }
    public function upd(Request $request,$id){
        $p = new kelas();
        $validasi = $request->validate([
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required'
            
        ]);
        $p = $p->find($id)->update($request->all());
        return redirect('kelas')->with('Pesan','Update Data Berhasil');
    }
    public function hapuss($id){
        $p = new kelas();
        $p = $p->find($id);
        $p->delete();
        return back();
    }
    


    //SPP
    public function spp(){
        $m = new spp();
        return view('spp.spp',['data'=>$m->all()]);
    }
    public function Tambahspp(){
        return view("spp.tambahspp");
    }
    public function cektambahspp(Request $request){ 
        $cek = $request->validate([
            'tahun'=>'required',
            'nominal'=>'required'
        ]);
        $m = new spp();
        $m->create($request->all());
        return redirect('spp');        
    }

    public function hapusss($id){
        $p = new spp();
        $p = $p->find($id);
        $p->delete();
        return back();
    }

    public function edittt($id){
        $p = new spp();
        return view('spp.editspp',['edites'=>$p->find($id)]);
    }
    public function upda(Request $request,$id){
        $p = new spp();
        $validasi = $request->validate([
            'tahun'=>'required',
            'nominal'=>'required'
        ]);
        $p = $p->find($id)->update($request->all());
        return redirect('spp')->with('Pesan','Update Data Berhasil');
    }
   


    public function keluar(){
        session()->flush();
        return back();
    }
}
