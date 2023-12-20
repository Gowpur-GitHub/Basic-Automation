@extends('dashboard.layouts.main')

@section('container')
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
                Tambah Penilaian
            </div>
            <div class="card-body">
                <form action="{{ route('data-penilaian.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="alternatif_id" class="col-2 text-end">Alternatif</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('alternatif_id')
                                    is-invalid
                                @enderror" id="alternatif_id" name="alternatif_id" required>
                                <option value="">-- Pilih Alternatif --</option>
                                @foreach ($alternatifs as $alternatif)
                                @if (old('alternatif_id') == $alternatif->id)
                                <option value="{{ $alternatif->id }}" selected>{{ $alternatif->namaAlternatif }}
                                </option>
                                @else
                                <option value="{{ $alternatif->id }}">{{ $alternatif->namaAlternatif }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('alternatif_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>

                    <div class="mb-3 row">
                        <label for="C1x" class="col-2 text-end">Harga</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C1x')
                                    is-invalid
                                @enderror" id="C1x" name="C1x" required>
                                <option value="">-- Pilih Harga --</option>
                                @foreach ($C1s as $c1)
                                @if (old('C1x') == $c1->id)
                                <option value="{{ $c1->nHarga }}" selected>{{ $c1->harga }}</option>
                                @else
                                <option value="{{ $c1->nHarga }}">{{ $c1->harga }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C1x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C2x" class="col-2 text-end">RAM</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C2x')
                                    is-invalid
                                @enderror" id="C2x" name="C2x" required>
                                <option value="">-- Pilih RAM --</option>
                                @foreach ($C2s as $c2)
                                @if (old('C2x') == $c2->id)
                                <option value="{{ $c2->nUkuranLayar }}" selected>{{ $c2->ukuranLayar }}</option>
                                @else
                                <option value="{{ $c2->nUkuranLayar }}">{{ $c2->ukuranLayar }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C2x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C3x" class="col-2 text-end">SSD</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C3x')
                                    is-invalid
                                @enderror" id="C3x" name="C3x" required>
                                <option value="">-- Pilih SSD --</option>
                                @foreach ($C3s as $c3)
                                @if (old('C3x') == $c3->id)
                                <option value="{{ $c3->nResolusiLayar }}" selected>{{ $c3->resolusiLayar }}</option>
                                @else
                                <option value="{{ $c3->nResolusiLayar }}">{{ $c3->resolusiLayar }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C3x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C4x" class="col-2 text-end">PROCESSOR</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C4x')
                                    is-invalid
                                @enderror" id="C4x" name="C4x" required>
                                <option value="">-- Pilih PROCESSOR --</option>
                                @foreach ($C4s as $c4)
                                @if (old('C4x') == $c4->id)
                                <option value="{{ $c4->nTeknologiPanel }}" selected>{{ $c4->teknologiPanel }}</option>
                                @else
                                <option value="{{ $c4->nTeknologiPanel }}">{{ $c4->teknologiPanel }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C4x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C5x" class="col-2 text-end">VGA</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C5x')
                                    is-invalid
                                @enderror" id="C5x" name="C5x" required>
                                <option value="">-- Pilih VGA --</option>
                                @foreach ($C5s as $c5)
                                @if (old('C5x') == $c5->id)
                                <option value="{{ $c5->nRefreshRate }}" selected>{{ $c5->refreshRate }}</option>
                                @else
                                <option value="{{ $c5->nRefreshRate }}">{{ $c5->refreshRate }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C5x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="C6x" class="col-2 text-end">DISPLAY PANEL</label>
                        <div class="col-10">
                            <select class="form-select form-select-sm @error('C6x')
                                    is-invalid
                                @enderror" id="C6x" name="C6x" required>
                                <option value="">-- Pilih DISPLAY PANEL --</option>
                                @foreach ($C6s as $c6)
                                @if (old('C6x') == $c6->id)
                                <option value="{{ $c6->nResponseTime }}" selected>{{ $c6->responseTime }}</option>
                                @else
                                <option value="{{ $c6->nResponseTime }}">{{ $c6->responseTime }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('C6x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-3">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card-fill"></i>
                                Tambah & tambah lagi</button>
                                <a href="{{ route('data-penilaian.index') }}" class="btn btn-danger"><i
                                class="bi bi-x-circle"></i> Batal</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@push('slug')
<script>
    const alternatif_id = document.querySelector("#alternatif_id");
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

        alternatif_id.addEventListener("change", () => {
            // let preslug = alternatif_id.value;
            preslug = generateString(8);
            slug.value = preslug.toLowerCase();
        });
</script>
@endpush