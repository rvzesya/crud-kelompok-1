@extends('layouts.app')
@section('content')
<h4>Edit Buku</h4>
<form action="{{ route('bukus.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('bukus.form')
</form>
@endsection
