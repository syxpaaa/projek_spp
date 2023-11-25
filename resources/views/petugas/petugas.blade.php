@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">Data petugas</h1>              
    </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="panel panel-default" style="margin-top: 20px">
                        <div class="panel-heading" style="background-color:#8EACCD ">
                            Data petugas
                        </div>
                        <a href="{{ url('Tambahpetugas') }}" class="btn btn-light " style="background-color:#8EACCD">Tambah</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id petugass</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>Nama petugas</th>
                                            <th>level</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $inem)
                                            <tr>
                                                <td>{{ $inem->id_petugas }}</td>
                                                <td>{{ $inem->username }}</td>
                                                <td>{{ $inem->password }}</td>
                                                <td>{{ $inem->nama_petugas }}</td>
                                                <td>{{ $inem->level }}</td>
                                                <td class="center">
                                                    <a href="{{ url('edit/' . $inem->id_petugas) }}" class="btn btn-light"
                                                        style="background-color:#8EACCD ">Edit</a>
                                                    <a href="{{ url('hapus/' . $inem->id_petugas) }}"
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
