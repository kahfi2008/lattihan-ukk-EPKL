@extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')

<h1>Tambah Perusahaan</h1>

<form action="{{ route('perusahaan.store') }}" method="POST">

    @csrf

    <p>
        <label>Nama Perusahaan</label><br>
        <input type="text" name="nama_perusahaan">
    </p>

    <p>
        <label>Bidang Usaha</label><br>
        <input type="text" name="bidang_usaha">
    </p>

    <p>
        <label>Alamat</label><br>
        <textarea name="alamat"></textarea>
    </p>

    <p>
        <label>No Telepon</label><br>
        <input type="text" name="no_telepon">
    </p>

    <p>
        <label>Jumlah Siswa</label><br>
        <input type="number" name="jumlah_siswa" value="0">
    </p>

    <button type="submit">Simpan</button>

</form>

@endsection
