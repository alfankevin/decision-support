@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kriteria</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Kriteria</a></div>
                <div class="breadcrumb-item">Tabel</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Daftar Kriteria</h4>
                            <div class="card-header-action">
                                <a class="btn btn-icon icon-left btn-primary" href="{{ route('kriteria.create') }}">Tambah Kriteria</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md" id="keluarga">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kriteria</th>
                                            <th>Atribut</th>
                                            <th>Bobot</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->kriteria }}</td>
                                                <td>{{ $item->atribut }}</td>
                                                <td>{{ $item->bobot }}%</td>
                                                <td class="text-right">
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('kriteria.edit', $item->id) }}"
                                                            class="btn btn-sm btn-secondary btn-icon ml-2 d-flex align-items-center">
                                                            <span><i class="fas fa-edit"></i></span>&nbsp;Ubah
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-info btn-icon ml-2 d-flex align-items-center">
                                                            <span><i class="fas fa-edit"></i></span>&nbsp;Sub Kriteria
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('customStyle')
@endpush