@extends('dashboard.layouts.main')

@section('container')

<style>
    #example {
        border: 2px #9DB2BF;
    }
</style>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Hasil Akhir</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Hasil Akhir</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Hasil Akhir Perankingan WP
            </div>
            <div class="d-flex justify-content-start">
            <div class="ms-3 mt-3 mb-3">
                    <a href="{{ route('data-hasil-akhir.result') }}" target="_blank" class="btn btn-primary btn-sm"><i
                            class="bi bi-printer"></i> Cetak Data</a>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">Nilai V</th>
                            <th class="text-center">Rank</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($rankingWP as $rWP)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rWP->alternatif->namaAlternatif }}</td>
                            <td>{{ round($rWP->nilai_v, 4) }}</td>
                            <td>{{ $loop->iteration }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection