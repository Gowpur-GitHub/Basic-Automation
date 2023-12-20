@extends('dashboard.layouts.main')

@section('container')

<style>
    #example {
        border: 2px #9DB2BF;
    }
</style>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Penilaian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Penilaian
            </div>
            <div class="d-flex justify-content-start">
                <div class="ms-3 mt-3 mb-3">
                    <a href="{{ route('data-penilaian.create') }}" class="btn btn-primary btn-sm"><i
                            class="bi bi-plus-lg"></i> Tambah Penilaian</a>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Alternatif</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($penilaians as $penilaian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penilaian->alternatif->namaAlternatif }}</td>
                            <td>
                                <div class="btn-group-sm" role="group">
                                    <a href="{{ route('data-penilaian.edit', $penilaian->slug) }}"
                                        class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Alternatif</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection