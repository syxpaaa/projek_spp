@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="panel panel-default" style="margin-top: 100px">
            <div class="panel-heading" style="background-color:#8EACCD">
                Tambah siswa
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
                        Gagal tambah siswa
                      </div>
                      @endif
                      <form action="{{url('Tambasiswa')}}" method="post">
                        @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>nisn</label>
                                <input type="text" class="form-control" name="nisn" placeholder="nisn">
                            </div>
                            <div class="form-group">
                                <label>nis</label>
                                <input type="number" class="form-control" name="nis" placeholder="nis">
                            </div>
                            <div class="form-group">
                                <label>nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="nama">
                            </div>
                            <div class="form-group">
                                <label>id kelas</label>
                                <input type="number" class="form-control" name="id_kelas" placeholder="id_kelas">
                            </div>
                            <div class="form-group">
                                <label>alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <label>no telp</label>
                                <input type="number" class="form-control" name="no_telp" placeholder="no_telp">
                            </div>
                            <button class="btn btn-default" style="background-color:#8EACCD">Tambah</button>
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