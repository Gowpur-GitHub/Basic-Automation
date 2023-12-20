@extends('dashboard.layouts.main')

@section('container')

<style>
    #example {
        border: 2px #9DB2BF;
    }
</style>

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
    </div>
</main>
@endsection

{{-- {{ Session::get('name') }} --}}