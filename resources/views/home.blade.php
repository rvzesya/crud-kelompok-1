@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-sm">
                <div class="card-body">

                    <h5 class="card-title">
                        Selamat datang di {{ config('app.name') }}!
                    </h5>

                    <p class="card-text">
                        Lakukan management buku perpustakaan di website ini!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
