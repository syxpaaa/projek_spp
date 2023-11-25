@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">Data spp</h1>              
    </div>
    <div id="page-inner">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-heading" style="background-color:#8EACCD ">
                    Data spp
                </div> 
                <a href="{{ url('Tambahspp') }}" class="btn btn-light " style="background-color:#8EACCD">Tambah</a>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id spp</th>
                                    <th>tahun</th>
                                    <th>nominal</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $inem)
                                    <tr>
                                        <td>{{ $inem->id_spp }}</td>
                                        <td>{{ $inem->tahun }}</td>
                                        <td>{{ $inem->nominal }}</td>
                                        <td class="center">
                                            <a href="{{ url('edittt/'. $inem->id_spp) }}" class="btn btn-light"
                                                style="background-color:#8EACCD ">Edit</a>
                                            <a href="{{ url('hapusss/' . $inem->id_spp) }}"
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
