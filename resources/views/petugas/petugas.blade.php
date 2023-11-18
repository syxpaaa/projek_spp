@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="panel panel-default" style="margin-top: 100px">
                <div class="panel-heading" style="background-color:#8EACCD ">
                    Data petugas
                </div> 
                <a href="{{url('')}}" class="btn btn-light" style="background-color:#8EACCD">
                    <i class=""></i>Tambah</a>
                    <div class="modal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
                            <td>{{$inem->id_petugas}}</td>
                            <td>{{$inem->username}}</td>
                            <td>{{$inem->password}}</td>
                            <td>{{$inem->nama_petugas}}</td>
                            <td>{{$inem->level}}</td>
                            <td class="center">
                                <a href="{{url('edit/'.$inem->id_petugas)}}" class="btn btn-light" style="background-color:#8EACCD "><i class=""></i> Edit</a>
                                <a href="hapus/{{$inem->id_petugas}}" class="btn btn-danger"><i class=""></i> Delete</a>
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