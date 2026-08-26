@extends('layouts.app')

@section('title', 'Tambah Kompetensi')

@section('content')

<h1>Tambah Kompetensi</h1>

<form action="{{ route('kompetensi.store') }}" method="POST">

    @csrf

    <label>Nama Kompetensi</label>

    <br>

    <input type="text" name="nama_kompetensi">

    <br><br>

    <label>Deskripsi</label>

    <br>

    <textarea name="deskripsi"></textarea>

    <br><br>

    <button type="submit">
        Simpan
    </button>

    <a href="{{ route('kompetensi.index') }}">
        Kembali
    </a>

</form>

@endsection
