@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div class="header"> 
            <h1 class="page-header">Data Kelas</h1>              
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="panel panel-default" style="margin-top: 20px">
                        <div class="panel-heading" style="background-color:#8EACCD ">
                            Data kelas
                        </div>
                        <a href="{{ url('Tambahkelas') }}" class="btn btn-light " style="background-color:#8EACCD">Tambah</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id kelas</th>
                                            <th>Nama Kelas</th>
                                            <th>Kompetensi keahlian</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $inem)
                                            <tr>
                                                <td>{{ $inem->id_kelas }}</td>
                                                <td>{{ $inem->nama_kelas }}</td>
                                                <td>{{ $inem->kompetensi_keahlian }}</td>
                                                <td class="center">
                                                    <a href="{{ url('editt/' . $inem->id_kelas) }}" class="btn btn-light"
                                                        style="background-color:#8EACCD ">Edit</a>
                                                    <a href="{{ url('hapuss/' . $inem->id_kelas) }}"
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
