@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Kriteria</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Sub Kriteria</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Ubah Kriteria PROCESSOR (C4)
            </div>
            <div class="card-body">
                <form action="{{ route('data-sub-kriteria3.update', $subkriteria->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3 row">
                        <label for="teknologiPanel"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama Sub
                            Kriteria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('teknologiPanel')
                                  is-invalid
                              @enderror" id="teknologiPanel"
                                value="{{ old('teknologiPanel', $subkriteria->teknologiPanel) }}" name="teknologiPanel"
                                required>
                            @error('teknologiPanel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="slug" name="slug"
                        value="{{ old('slug', $subkriteria->slug) }}" required>

                    <div class="mb-3 row">
                        <label for="nTeknologiPanel"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('nTeknologiPanel')
                                  is-invalid
                              @enderror" id="nTeknologiPanel"
                                value="{{ old('nTeknologiPanel', $subkriteria->nTeknologiPanel) }}"
                                name="nTeknologiPanel" required>
                            @error('nTeknologiPanel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                                    Ubah</button>
                                <a href="{{ route('data-sub-kriteria.index') }}" class="btn btn-danger"><i
                                        class="bi bi-x-circle"></i> Batal</a>
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
    const teknologiPanel = document.querySelector("#teknologiPanel");
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

        teknologiPanel.addEventListener("keyup", () => {
            // let preslug = teknologiPanel.value;
            // preslug = preslug.replace(/ /g,"-");
            preslug = generateString(8);
            slug.value = preslug.toLowerCase();
        });
</script>
@endpush