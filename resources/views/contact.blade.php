@extends('template')
@section('content')
    {{-- <a href="{{ url('contact/add') }}"></a> --}}
    <table class="table table-hover table-bordered table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($contact as $key => $item)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pesan }}</td>
                <td>
                    <a href="contact/delete/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return-window.confirm('Hapus Data Ini?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection