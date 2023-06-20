@extends('template')
@section('content')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body> --}}
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-mb-3">
                <label for="" class="form-label">Nama Portofolio</label>
                <input type="text" name="nama_portofolio" id="nama_portofolio" class="form-control" value="{{ $portofolio->nama }}" placeholder="Masukan Nama Portofolio">
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $portofolio->kategori }}" placeholder="Masukan Kategori">
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $portofolio->deskripsi }}" placeholder="Masukan Deskripsi">
            </div>
            <div class="col-mb-3 mt-3">
                <label for="" class="form-label">Foto</label>
                <img src="/storage/{{ $portofolio->foto }}" width="250" height="" alt="">
                <input type="file" name="foto" id="foto" class="form-control mt-3" placeholder="Masukan Foto">
            </div>
            <div class="pt-3">
                <input type="submit" value="{{ $tombol }}" class="form-control btn text-white" style="background-color:#748DA6;">
            </div>
        </div>
    </form>
{{-- </body>
</html> --}}
@endsection
