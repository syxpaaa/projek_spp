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
                            <form action="{{url('edittt/'.$edites->id_spp)}}" method="post">
                                @csrf
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>tahun</label>
                                                    <input type="number" class="form-control" name="tahun"
                                                        placeholder="tahun" value="{{ $edites->tahun }}">
                                                    @error('tahun')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>nominal</label>
                                                    <input type="number" class="form-control" name="nominal"
                                                        placeholder="nominal" value="{{ $edites->nominal }}">
                                                    @error('nominal')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-default">Simpan</button>
                                                <button class="btn btn-default" type="reset"><a
                                                        href="{{ url('spp') }}">Batal</a></button>
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
