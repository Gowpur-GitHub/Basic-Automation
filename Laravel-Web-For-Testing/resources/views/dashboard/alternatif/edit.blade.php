@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Alternatif</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Alternatif</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Ubah Alternatif
            </div>
            <div class="card-body">
                <form action="{{ route('data-alternatif.update', $alternatif->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3 row">
                        <label for="kodeAlternatif"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kode Alternatif</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('kodeAlternatif')
                                  is-invalid
                              @enderror" id="kodeAlternatif"
                                value="{{ old('kodeAlternatif', $alternatif->kodeAlternatif) }}" name="kodeAlternatif"
                                required>
                            @error('kodeAlternatif')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="slug" name="slug"
                        value="{{ old('slug', $alternatif->slug) }}" required>

                    <div class="mb-3 row">
                        <label for="namaAlternatif"
                            class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama Alternatif</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('namaAlternatif')
                                  is-invalid
                              @enderror" id="namaAlternatif"
                                value="{{ old('namaAlternatif', $alternatif->namaAlternatif) }}" name="namaAlternatif"
                                required>
                            @error('namaAlternatif')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                                    Ubah</button>
                                <a href="{{ route('data-alternatif.index') }}" class="btn btn-danger"><i
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
    const kodeAlternatif = document.querySelector("#kodeAlternatif");
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

        kodeAlternatif.addEventListener("keyup", () => {
            // let preslug = kodeAlternatif.value;
            // preslug = preslug.replace(/ /g,"-");
            preslug = generateString(8);
            slug.value = preslug.toLowerCase();
        });
</script>
@endpush