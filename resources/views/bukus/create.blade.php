@extends('layouts.app')

@section('content')
    <h4>Tambah Buku</h4>

    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        @include('bukus.form')
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
