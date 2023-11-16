@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="panel panel-default" style="margin-top: 100px">
                <div class="panel-heading" style="background-color:#8EACCD ">
                    Data kelas
                </div> 
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
                                @foreach ($data as $iyem)
                        <tr>
                            <td>{{$iyem->id_kelas}}</td>
                            <td>{{$iyem->nama_kelas}}</td>
                            <td>{{$iyem->kompetensi_keahlian}}</td>
                            <td class="center">
                                <a href="{{url('edit/'.$iyem->id_kelas)}}" class="btn btn-light" style="background-color:#8EACCD "><i class="fa fa-edit "></i> Edit</a>
                                <a href="hapus/{{$iyem->is_kelas}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
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