@extends('layouts.app')

@section('title', 'Detail Perusahaan')

@section('content')

<h1>Detail Perusahaan</h1>

<p>
    <strong>Nama:</strong>
    {{ $perusahaan->nama_perusahaan }}
</p>

<p>
    <strong>Bidang Usaha:</strong>
    {{ $perusahaan->bidang_usaha }}
</p>

<p>
    <strong>Alamat:</strong>
    {{ $perusahaan->alamat }}
</p>

<p>
    <strong>No. Telepon:</strong>
    {{ $perusahaan->no_telepon }}
</p>

<p>
    <strong>Jumlah Siswa:</strong>
    {{ $perusahaan->jumlah_siswa }}
</p>

<a href="{{ route('perusahaan.index') }}">
    Kembali
</a>

@endsection
