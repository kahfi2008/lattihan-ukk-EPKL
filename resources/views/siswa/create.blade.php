@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')

<h1>Tambah Data Siswa</h1>

<form action="{{ route('siswa.store') }}" method="POST">

    @csrf

    <p>
        <label>NIS</label><br>
        <input type="text" name="nis" required>
    </p>

    <p>
        <label>Nama</label><br>
        <input type="text" name="nama" required>
    </p>

    <p>
        <label>Kelas</label><br>
        <input type="text" name="kelas" required>
    </p>

    <p>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" required>
    </p>

    <p>
        <label>No. Telepon</label><br>
        <input type="text" name="no_telepon" required>
    </p>

    <p>
        <label>Tanggal Mulai PKL</label><br>
        <input type="date" name="tanggal_mulai_pkl" required>
    </p>

    <p>
        <label>Tanggal Selesai PKL</label><br>
        <input type="date" name="tanggal_selesai_pkl" required>
    </p>

    <p>
        <label>Perusahaan PKL</label><br>

        <select name="perusahaan_id" required>

            <option value="">-- Pilih Perusahaan --</option>

            @foreach ($perusahaan as $p)
                <option value="{{ $p->id }}">
                    {{ $p->nama_perusahaan }}
                </option>
            @endforeach

        </select>

    </p>

    <button type="submit">Simpan</button>

    <a href="{{ route('siswa.index') }}">
        Kembali
    </a>

</form>

@endsection
