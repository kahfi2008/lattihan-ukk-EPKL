@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

<h1>Detail Siswa</h1>

<p><strong>NIS:</strong> {{ $siswa->nis }}</p>

<p><strong>Nama:</strong> {{ $siswa->nama }}</p>

<p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>

<p><strong>Jurusan:</strong> {{ $siswa->jurusan }}</p>

<p><strong>No. Telepon:</strong> {{ $siswa->no_telepon }}</p>

<p>
    <strong>Tanggal Mulai PKL:</strong>
    {{ $siswa->tanggal_mulai_pkl }}
</p>

<p>
    <strong>Tanggal Selesai PKL:</strong>
    {{ $siswa->tanggal_selesai_pkl }}
</p>

<a href="{{ route('siswa.index') }}">Kembali</a>

@endsection
