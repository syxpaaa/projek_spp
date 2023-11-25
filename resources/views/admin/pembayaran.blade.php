@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">History pembayaran</h1>              
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="panel panel-default" style="margin-top: 20px">
                    <div class="panel-heading" style="background-color:#8EACCD ">
                        pembayaran
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id petugas</th>
                                        <th>Nisn</th>
                                        <th>Kompetensi keahlian</th>
                                        <th>aksi</th>
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