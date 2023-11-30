@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="panel panel-default" style="margin-top: 100px">
            <div class="panel-heading" style="background-color:#8EACCD">
                 Transaksi
            </div>
            <div class="card-body">
                @if (session('pesan'))
                    <div class="alert alert-primary" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                      {{--pesan jika validasi gagal--}}
                    @if ($errors->any())
                    <div class="alert alert-primary" role="alert">
                        Gagal transaksi
                      </div>
                      @endif
                      <form action="{{url('simpan')}}" method="post">
                        @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>id petugas</label>
                                <input type="number" class="form-control" name="id_petugas" placeholder="id petugas">
                            </div>
                            <div class="form-group">
                                <label>nisn</label>
                                <input type="number" class="form-control" name="nisn" placeholder="nisn">
                            </div>
                            <div class="form-group">
                                <label>tanggal bayar</label>
                                <input type="number" class="form-control" name="tgl_bayar" placeholder="tgl bayar">
                            </div>
                            <div class="form-group">
                                <label>bulan dibayar</label>
                                <input type="text" class="form-control" name="bulan_dibayar" placeholder="bulan dibayar">
                            </div>
                            <div class="form-group">
                                <label>tahun dibayar</label>
                                <input type="number" class="form-control" name="tahun_dibayar" placeholder="tahun bayar">
                            </div>
                            <div class="form-group">
                                <label>id spp</label>
                                <input type="number" class="form-control" name="id_spp" placeholder="id spp">
                            </div>
                            <div class="form-group">
                                <label>jumlah bayar</label>
                                <input type="number" class="form-control" name="jumlah_bayar" placeholder="jumlah bayar">
                            </div>
                            </div>
                            <button class="btn btn-default" style="background-color:#8EACCD">simpan</button>
                            <button class="btn btn-default" type="reset">Batal</button>
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
</form>
@endsection