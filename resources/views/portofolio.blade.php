@extends('template')
@section('content')
<a href="{{ url('portofolio/add') }}" class="btn btn-sm text-white" style="background-color:#748DA6;">Tambah Data</a>
    <table class="table table-hover table-bordred table-striped mt-3">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Portofolio</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach ($portofolio as $key => $item)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <img src="/storage/{{ $item->foto }}" width="150">
                </td>
                <td>
                    <a href="portofolio/delete/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return-window.confirm ('Hapus Data Ini?')">Hapus</a>
                    <a href="portofolio/edit/{{ $item->id }}" class="btn btn-success btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>    
@endsection