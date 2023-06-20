@extends('template')
@section('content')
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <form action="{{ $action }}">
            <div class="row">
                <div class="container-fluid p-3">
                    <h3 class="fw-bold text-white">Setting Profil</h3>
                    <div class="col-md-12">
                            <div class="col-mb-3">
                                <label for="" class="form-label">Nisn</label>
                                <input type="text" name="nisn" id="nisn" class="form-control" value="{{ $nisn }}" placeholder="Masukan Nisn">
                                <label for="" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ $nama }}" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tl" class="form-control" value="{{ $tl }}" placeholder="Masukan Tempat Lahir">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="ttl" class="form-control" value="{{ $ttl }}" placeholder="Masukan Tanggal Lahir">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-select" >
                                    <option value="Jenis Kelamin"></option>
                                    <option value="L" {{ $jk=='L'?'selected':'' }}>Laki-Laki</option>
                                    <option value="P" {{ $jk=='P'?'selected':'' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" value="{{ $status }}" placeholder="Masukan Status">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control" value="{{ $pendidikan }}" placeholder="Masukan Pendidikan">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Kontak</label>
                                <input type="text" name="kontak" class="form-control" value="{{ $kontak }}" placeholder="Masukan Kontak">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $email }}" placeholder="Masukan Email">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Tempat Tinggal</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $alamat }}" placeholder="Masukan Tempat Tinggal">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="{{ $deskripsi }}" placeholder="Masukan Deskripsi">
                            </div>
                            <div class="col-mb-3 mt-3">
                                <label for="" class="form-label">Foto</label>
                                <img src="/storage/{{ $foto }}" width="250" height="" alt="">
                                <input type="file" name="foto" id="foto" class="form-control mt-3" value="{{ $foto }}" placeholder="Masukan Foto">
                            </div>
                            <div class="pt-3">
                                <input type="submit" value="Simpan" class="form-control text-white btn" style="background-color:#748DA6;">
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </form>
@endsection