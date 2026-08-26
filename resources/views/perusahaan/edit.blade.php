@extends('layouts.app')

@section('title', 'Edit Perusahaan')

@section('content')

<h1>Edit Perusahaan</h1>

<form action="{{ route('perusahaan.update', $perusahaan->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <label>Nama Perusahaan</label>
    <br>
    <input type="text"
           name="nama_perusahaan"
           value="{{ $perusahaan->nama_perusahaan }}">

    <br><br>

    <label>Bidang Usaha</label>
    <br>
    <input type="text"
           name="bidang_usaha"
           value="{{ $perusahaan->bidang_usaha }}">

    <br><br>

    <label>Alamat</label>
    <br>
    <textarea name="alamat">{{ $perusahaan->alamat }}</textarea>

    <br><br>

    <label>No. Telepon</label>
    <br>
    <input type="text"
           name="no_telepon"
           value="{{ $perusahaan->no_telepon }}">

    <br><br>

    <label>Jumlah Siswa</label>
    <br>
    <input type="number"
           name="jumlah_siswa"
           value="{{ $perusahaan->jumlah_siswa }}">

    <br><br>

    <button type="submit">
        Update
    </button>

    <a href="{{ route('perusahaan.index') }}">
        Kembali
    </a>

</form>

@endsection
