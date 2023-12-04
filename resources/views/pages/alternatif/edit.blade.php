@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Alternatif</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('alternatif.index') }}">Alternatif</a></div>
                <div class="breadcrumb-item">Ubah</div>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Validasi Ubah Alternatif</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('alternatif.update', $alternatif) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="alternatif">Nama alternatif</label>
                            <input type="text" class="form-control @error('alternatif') is-invalid @enderror"
                                id="alternatif" name="alternatif" spellcheck="false" autocomplete="off"
                                value="{{ old('alternatif', $alternatif->alternatif) }}">
                            @error('alternatif')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Simpan</button>
                        <a class="btn btn-light" href="{{ route('alternatif.index') }}">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('customScript')
    <script src="/assets/js/select2.min.js"></script>
@endpush

@push('customStyle')
    <link rel="stylesheet" href="/assets/css/select2.min.css">
@endpush