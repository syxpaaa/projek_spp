@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="panel panel-default" style="margin-top: 100px">
                        <div class="panel-heading" style="background-color:#8EACCD">
                            Edit kelas
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
                                    Gagal edit kelas
                                </div>
                            @endif
                            <form action="{{ url('editt/'.$updatekel->id_kelas) }}" method="post">
                                @csrf
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>nama kelas</label>
                                                    <input type="text" class="form-control" name="nama_kelas"
                                                        placeholder="nama_kelas" value="{{ $updatekel->nama_kelas }}">
                                                    @error('nama_kelas')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>kompetensi keahlian</label>
                                                    <input type="text" class="form-control" name="kompetensi_keahlian"
                                                        placeholder="kompetensi_keahlian" value="{{ $updatekel->kompetensi_keahlian }}">
                                                    @error('kompetensi_keahlian')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-default">Simpan</button>
                                                <button class="btn btn-default" type="reset"><a
                                                        href="{{ url('kelas') }}">Batal</a></button>
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
