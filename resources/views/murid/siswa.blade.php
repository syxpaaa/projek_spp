@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">Data siswa</h1>              
    </div>
    <div id="page-inner">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-heading" style="background-color:#8EACCD ">
                    Data Siswa
                </div> 
                <a href="{{ url('Tambasiswa') }}" class="btn btn-light " style="background-color:#8EACCD">Tambah</a>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nis</th>
                                    <th>Nama</th>
                                    <th>ID Kelas</th>
                                    <th>alamat</th>
                                    <th>No Telp</th>
                                    <th>ID spp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $inem)
                                <tr>
                                    <td>{{$inem->nisn}}</td>
                                    <td>{{$inem->nis}}</td>
                                    <td>{{$inem->nama}}</td>
                                    <td>{{$inem->id_kelas}}</td>
                                    <td>{{$inem->alamat}}</td>
                                    <td>{{$inem->no_telp}}</td>
                                    <td>{{$inem->id_spp}}</td>
                                    <td class="center">
                                        <a href="{{ url('updat/' . $inem->nisn) }}" class="btn btn-light"
                                            style="background-color:#8EACCD ">Edit</a>
                                        <a href="{{ url('hps/' . $inem->nisn) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection