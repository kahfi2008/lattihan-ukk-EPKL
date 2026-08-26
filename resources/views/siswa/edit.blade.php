@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<h1>Edit Data Siswa</h1>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">

    @csrf
    @method('PUT')

    <p>
        <label>NIS</label><br>
        <input type="text" name="nis"
               value="{{ $siswa->nis }}" required>
    </p>

    <p>
        <label>Nama</label><br>
        <input type="text" name="nama"
               value="{{ $siswa->nama }}" required>
    </p>

    <p>
        <label>Kelas</label><br>
        <input type="text" name="kelas"
               value="{{ $siswa->kelas }}" required>
    </p>

    <p>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan"
               value="{{ $siswa->jurusan }}" required>
    </p>

    <p>
        <label>No. Telepon</label><br>
        <input type="text" name="no_telepon"
               value="{{ $siswa->no_telepon }}" required>
    </p>

    <p>
        <label>Tanggal Mulai PKL</label><br>
        <input type="date" name="tanggal_mulai_pkl"
               value="{{ $siswa->tanggal_mulai_pkl }}" required>
    </p>

    <p>
        <label>Tanggal Selesai PKL</label><br>
        <input type="date" name="tanggal_selesai_pkl"
               value="{{ $siswa->tanggal_selesai_pkl }}" required>
    </p>

    <button type="submit">Update</button>

    <a href="{{ route('siswa.index') }}">Kembali</a>

</form>

@endsection
