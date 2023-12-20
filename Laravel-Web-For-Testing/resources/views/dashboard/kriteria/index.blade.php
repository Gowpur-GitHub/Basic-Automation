@extends('dashboard.layouts.main')

@section('container')

<style>
    #example {
        border: 2px #9DB2BF;
    }
</style>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Kriteria</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kriteria</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Kriteria
            </div>
            <div class="card-body">
                <table id="example" class="table table-hover ">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Kriteria</th>
                            <th class="text-center">Nama Kriteria</th>
                            <th class="text-center">Bobot</th>
                            <th class="text-center">Jenis</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kriterias as $kriteria)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kriteria->kodeKriteria }}</td>
                            <td>{{ $kriteria->namaKriteria }}</td>
                            <td>{{ $kriteria->bobot }}</td>
                            <td>{{ $kriteria->jenis }}</td>
                            <td>
                                <div class="btn-group-sm" role="group">
                                    <a href="{{ route('data-kriteria.edit', $kriteria->slug) }}"
                                        class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Kriteria</th>
                            <th class="text-center">Nama Kriteria</th>
                            <th class="text-center">Bobot</th>
                            <th class="text-center">Jenis</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection