@extends('dashboard.layouts.main')

@section('container')

<style>
    #example, #example1, #example2, #example3, #example4 {
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
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Matriks Keputusan (X)
            </div>
            <div class="card-body">
                <table id="example" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">C1</th>
                            <th class="text-center">C2</th>
                            <th class="text-center">C3</th>
                            <th class="text-center">C4</th>
                            <th class="text-center">C5</th>
                            <th class="text-center">C6</th>
                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($penilaians as $penilaian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penilaian->alternatif->namaAlternatif }}</td>
                            <td>{{ $penilaian->C1x }}</td>
                            <td>{{ $penilaian->C2x }}</td>
                            <td>{{ $penilaian->C3x }}</td>
                            <td>{{ $penilaian->C4x }}</td>
                            <td>{{ $penilaian->C5x }}</td>
                            <td>{{ $penilaian->C6x }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Bobot Kriteria (W)
            </div>
            <div class="card-body">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            @foreach ($kriterias as $kriteria)
                            <th class="text-center">{{ $kriteria->kodeKriteria }} ({{ $kriteria->jenis }})</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kriterias as $kriteria)
                        <th class="fw-normal">{{ $kriteria->bobot }}</th>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Normalisasi Bobot Kriteria (W)
            </div>
            <div class="card-body">
                <table id="example2" class="table table-hover">
                    <thead>
                        <tr>
                            @foreach ($kriterias as $kriteria)
                            <th class="text-center">{{ $kriteria->kodeKriteria }} ({{ $kriteria->jenis }})</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kriterias as $kriteria)
                        <th class="fw-normal">{{ round($kriteria->w_normalisasi, 4) }}</th>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Nilai Vektor (S)
            </div>
            <div class="card-body">
                <table id="example3" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">C1</th>
                            <th class="text-center">C2</th>
                            <th class="text-center">C3</th>
                            <th class="text-center">C4</th>
                            <th class="text-center">C5</th>
                            <th class="text-center">C6</th>
                            
                            <th class="text-center">Nilai S</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($penilaians as $penilaian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penilaian->alternatif->namaAlternatif }}</td>
                            <td>{{ round($penilaian->C1_val, 4) }}</td>
                            <td>{{ round($penilaian->C2_val, 4) }}</td>
                            <td>{{ round($penilaian->C3_val, 4) }}</td>
                            <td>{{ round($penilaian->C4_val, 4) }}</td>
                            <td>{{ round($penilaian->C5_val, 4) }}</td>
                            <td>{{ round($penilaian->C6_val, 4) }}</td>
                            
                            <td>{{ round($penilaian->nilai_s, 4) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="9" class="text-center">Total</th>
                            <td class="text-center">{{ round($total_nilai_s, 4) }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Nilai Vektor (V)
            </div>
            <div class="card-body">
                <table id="example4" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">Perhitungan</th>
                            <th class="text-center">Nilai V</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($penilaians as $penilaian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penilaian->alternatif->namaAlternatif }}</td>
                            <td>{{ round($penilaian->nilai_s, 4) }} / {{ round($total_nilai_s, 4) }}</td>
                            <td>{{ round($penilaian->nilai_v, 4) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br><br>
    </div>
</main>
@endsection

@push('table')
<script>
    $(document).ready(function () {
            $('#example1').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example2').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example3').DataTable();
        });
</script>
<script>
    $(document).ready(function () {
            $('#example4').DataTable();
        });
</script>
@endpush

{{-- {{ Session::get('name') }} --}}