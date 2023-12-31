@extends('petugaslayout')
@section('konten')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="panel panel-default" style="margin-top: 100px">
            <div class="panel-heading" style="background-color:#8EACCD">
                Tambah kelas
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
                        Gagal tambah kelas
                      </div>
                      @endif
                      <form action="{{url('Tambahkelas')}}" method="post">
                        @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>nama kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" placeholder="nama_kelas">
                            </div>
                            <div class="form-group">
                                <label>kompetensi keahlian</label>
                                <input type="text" class="form-control" name="kompetensi_keahlian" placeholder="kompetensi_keahlian">
                            </div>
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