@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="panel panel-default" style="margin-top: 100px">
                        <div class="panel-heading" style="background-color:#8EACCD">
                            Edit petugas
                        </div>
                        <div class="card-body">
                            @if (session('pesan'))
                                <div class="alert alert-primary" role="alert">
                                    {{ session('pesan') }}
                                </div>
                            @endif
                            {{-- pesan jika validasi gagal --}}
                            @if ($errors->any())
                                <div class="alert alert-primary" role="alert">
                                    Gagal edit petugas
                                </div>
                            @endif
                            <form action="{{ url('edit/'.$editpet->id_petugas)}}" method="post">
                                @csrf
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="username" value="{{ $editpet->username }}">
                                                    @error('username')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="password" value="{{ $editpet->password }}">
                                                    @error('password')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Petugas</label>
                                                    <input type="text" class="form-control" name="nama_petugas"
                                                        placeholder="nama_petugas" value="{{ $editpet->nama_petugas }}">
                                                    @error('nama_petugas')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <select class="form-control" name="level"
                                                        value="{{ $editpet->level }}">
                                                        <option>Admin</option>
                                                        <option>Petugas</option>
                                                    </select>
                                                    @error('level')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-default">Simpan</button>
                                                <button class="btn btn-default" type="reset"><a
                                                        href="{{ url('petugas') }}">Batal</a></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
