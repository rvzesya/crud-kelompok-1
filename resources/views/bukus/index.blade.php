@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Daftar Buku</h4>
    <a href="{{ route('bukus.create') }}" class="btn btn-primary">Tambah Buku</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th><th>Kode</th><th>Judul</th><th>Kategori</th>
            <th>Penulis</th><th>Tahun</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($bukus as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->kode_buku }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->jumlah }}</td>
            <td>
                <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Yakin hapus buku ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
