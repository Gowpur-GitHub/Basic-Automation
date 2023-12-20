@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Perhitungan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Perhitungan</li>
        </ol>
        <div class="card text-center text-bg-light mb-4">
            <div class="card-body">
                <h5 class="card-title">Data Perhitungan</h5>
                <p class="card-text">Hitung Berdasarkan Metode Weight Product (WP)</p>
                <a href="{{ route('data-perhitungan.result') }}" class="btn btn-dark mb-3"><i
                        class="bi bi-calculator"></i> Hitung</a>
            </div>
        </div>
        <div class="card text-center text-bg-light mb-4">
            <div class="card-body">
                <h5 class="card-title">Data Perhitungan Kosong</h5>
                <p class="card-text">Isi dulu Data Alternatif & Data Penilaian!</p>
            </div>
        </div>
    </div>
</main>
@endsection