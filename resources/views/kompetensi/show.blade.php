@extends('layouts.app')

@section('title', 'Detail Kompetensi')

@section('content')

<h1>Detail Kompetensi</h1>

<p>
    <strong>Nama Kompetensi:</strong>
    {{ $kompetensi->nama_kompetensi }}
</p>

<p>
    <strong>Deskripsi:</strong>
    {{ $kompetensi->deskripsi }}
</p>

<a href="{{ route('kompetensi.index') }}">
    Kembali
</a>

@endsection
