@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="panel panel-default" style="margin-top: 100px">
                        <div class="panel-heading" style="background-color:#8EACCD">
                            Edit siswa
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
                                    Gagal edit siswa
                                </div>
                            @endif
                            <form action="{{ url('updat/'.$editsis->nisn)}}" method="post">
                                @csrf
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>nisn</label>
                                                    <input type="number" class="form-control" name="nisn"
                                                        placeholder="nisn" value="{{ $editsis->nisn }}">
                                                    @error('nisn')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>nis</label>
                                                    <input type="number" class="form-control" name="nis"
                                                        placeholder="nis" value="{{ $editsis->nis }}">
                                                    @error('nis')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama </label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="nama" value="{{ $editsis->nama }}">
                                                    @error('nama')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>id kelas </label>
                                                    <input type="number" class="form-control" name="id_kelas"
                                                        placeholder="id_kelas" value="{{ $editsis->id_kelas }}">
                                                    @error('id_kelas')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>alamat </label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        placeholder="alamat" value="{{ $editsis->alamat }}">
                                                    @error('alamat')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>no telp </label>
                                                    <input type="number" class="form-control" name="no_telp"
                                                        placeholder="no_telp" value="{{ $editsis->no_telp }}">
                                                    @error('no_telp')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>id spp </label>
                                                    <input type="number" class="form-control" name="id_spp"
                                                        placeholder="id_spp" value="{{ $editsis->id_spp }}">
                                                    @error('id_spp')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-default">Simpan</button>
                                                <button class="btn btn-default" type="reset"><a
                                                href="{{ url('siswa') }}">Batal</a></button>
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
