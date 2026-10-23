@extends('layouts.app')
@section('content')
<h4>Edit Buku</h4>
<form action="{{ route('bukus.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('bukus.form')
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
