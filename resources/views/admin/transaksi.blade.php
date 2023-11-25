@extends('petugaslayout')
@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">Transaksi</h1>              
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="panel panel-default" style="margin-top: 20px">
                    <div class="panel-heading" style="background-color:#8EACCD">
                        Transaksi
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
                        
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>id petugas</label>
                                                <input type="number" class="form-control" name="id_petugas"
                                                    placeholder="id_petugas" >
                                                @error('id_petugas')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>nisn</label>
                                                <input type="number" class="form-control" name="nisn"
                                                    placeholder="nisn" >
                                                @error('nisn')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>tanggal bayar </label>
                                                <input type="number" class="form-control" name="tanggal_bayar"
                                                    placeholder="tanggal_bayar" >
                                                @error('tanggal_bayar')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>bulan dibayar</label>
                                                <input type="number" class="form-control" name="bulan_dibayar"
                                                    placeholder="bulan_dibayar" >
                                                @error('bulan_dibayar')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>tahun dibayar </label>
                                                <input type="number" class="form-control" name="tahun_dibayar"
                                                    placeholder="tahun_dibayar" >
                                                @error('tahun_dibayar')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>id spp</label>
                                                <input type="number" class="form-control" name="id_spp"
                                                    placeholder="id_spp" >
                                                @error('id_spp')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>jumlah bayar</label>
                                                <input type="number" class="form-control" name="jumlah_bayar"
                                                    placeholder="jumlah_bayar" >
                                                @error('jumlah_bayar')
                                                    <div class="form-text">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button class="btn btn-default">Simpan</button>
                                            <button class="btn btn-default" type="reset"><a
                                            href="{{ url('transaksi') }}">Batal</a></button>
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