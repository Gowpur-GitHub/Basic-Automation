@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Hasil Akhir</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Hasil Akhir</li>
        </ol>
        <div class="card text-center text-bg-light mb-4">
            <div class="card-body">
                <h5 class="card-title">Data Hasil Akhir Kosong</h5>
                <p class="card-text">Isi dulu Data Alternatif & Data Penilaian!</p>
            </div>
        </div>
    </div>
</main>
@endsection