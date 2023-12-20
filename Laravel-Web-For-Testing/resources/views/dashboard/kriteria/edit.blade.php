@extends('dashboard.layouts.main')

@section('container')
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
                Ubah Kriteria
            </div>
            <div class="card-body">
                <form action="{{ route('data-kriteria.update', $kriteria->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3 row">
                        <label for="kodeKriteria"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kode Kriteria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('kodeKriteria')
                                  is-invalid
                              @enderror" id="kodeKriteria" value="{{ old('kodeKriteria', $kriteria->kodeKriteria) }}"
                                name="kodeKriteria" required>
                            @error('kodeKriteria')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="slug" name="slug"
                        value="{{ old('slug', $kriteria->slug) }}" required>

                    <div class="mb-3 row">
                        <label for="namaKriteria"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama Kriteria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('namaKriteria')
                                  is-invalid
                              @enderror" id="namaKriteria" value="{{ old('namaKriteria', $kriteria->namaKriteria) }}"
                                name="namaKriteria" required>
                            @error('namaKriteria')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bobot"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Bobot</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('bobot')
                                  is-invalid
                              @enderror" id="bobot" value="{{ old('bobot', $kriteria->bobot) }}" name="bobot" required>
                            @error('bobot')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jenis"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Jenis</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm @error('jenis')
                                  is-invalid
                              @enderror" id="jenis" name="jenis">
                                <option value="{{ old('jenis', $kriteria->jenis) }}" selected>{{ old('jenis',
                                    $kriteria->jenis) }}</option>
                                <option value="benefit">benefit</option>
                                <option value="cost">cost</option>
                            </select>
                            @error('jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                                    Ubah</button>
                                <a href="{{ route('data-kriteria.index') }}" class="btn btn-danger"><i
                                        class="bi bi-x-circle"></i>
                                    Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@push('slug')
<script>
    const kodeKriteria = document.querySelector("#kodeKriteria");
        const slug = document.querySelector('#slug');

        const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for ( let i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }

        kodeKriteria.addEventListener("keyup", () => {
            // let preslug = kodeKriteria.value;
            // preslug = preslug.replace(/ /g,"-");
            preslug = generateString(8);
            slug.value = preslug.toLowerCase();
        });
</script>
@endpush