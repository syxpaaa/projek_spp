@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="panel panel-default" style="margin-top: 100px">
                <div class="panel-heading" style="background-color:#8EACCD ">
                    Data spp
                </div> 
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nis</th>
                                    <th>Nama</th>
                                    <th>id kelas</th>
                                    <th>alamat</th>
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
                                    <td class="center">
                                        <a href="{{url('edit/'.$inem->id_petugas)}}" class="btn btn-light" style="background-color:#8EACCD "><i class="fa fa-edit "></i> Edit</a>
                                        <a href="hapus/{{$inem->id_petugas}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <a href="{{url('siswa/tambah')}}" class="btn btn-light" style="background-color:#8EACCD ">
                                <i class=""></i> Tambah
                            </a>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection