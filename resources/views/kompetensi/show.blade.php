@extends('layouts.app')

@section('title', 'Detail Kompetensi')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Detail Kompetensi</h2>

        <a
            href="{{ route('kompetensi.index') }}"
            class="btn btn-secondary"
        >
            Kembali
        </a>

    </div>


    {{-- INFORMASI KOMPETENSI --}}
    <div class="card mb-4">

        <div class="card-header">
            <strong>Informasi Kompetensi</strong>
        </div>

        <div class="card-body">

            <div class="row mb-3">

                <div class="col-md-3">
                    <strong>Nama Kompetensi</strong>
                </div>

                <div class="col-md-9">
                    {{ $kompetensi->nama_kompetensi }}
                </div>

            </div>


            <div class="row mb-3">

                <div class="col-md-3">
                    <strong>Deskripsi</strong>
                </div>

                <div class="col-md-9">
                    {{ $kompetensi->deskripsi ?? '-' }}
                </div>

            </div>


            <div class="row">

                <div class="col-md-3">
                    <strong>Jumlah Siswa</strong>
                </div>

                <div class="col-md-9">

                    <span class="badge bg-primary">
                        {{ $kompetensi->siswas->count() }} siswa
                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- DAFTAR SISWA --}}
    <div class="card">

        <div class="card-header">
            <strong>Daftar Siswa</strong>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                        </tr>

                    </thead>


                    <tbody>

                        @forelse($kompetensi->siswas as $key => $siswa)

                            <tr>

                                <td>
                                    {{ $key + 1 }}
                                </td>

                                <td>
                                    {{ $siswa->nis }}
                                </td>

                                <td>
                                    {{ $siswa->nama }}
                                </td>

                                <td>
                                    {{ $siswa->kelas }}
                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="4"
                                    class="text-center"
                                >
                                    Belum ada siswa yang memiliki
                                    kompetensi ini.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection