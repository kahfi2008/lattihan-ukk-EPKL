@extends('layouts.app')

@section('title', 'Dashboard E-PKL')

@section('content')

<div class="container">

    <h1>Selamat Datang di Sistem E-PKL</h1>

    <p>
        Sistem Informasi Praktik Kerja Lapangan (PKL)
    </p>

    <hr>

    <h2>Menu Sistem</h2>

    <p>
        Silakan pilih menu berikut untuk melihat data E-PKL.
    </p>

    <ul>
        <li>
            <a href="{{ route('kompetensi.index') }}">
                Daftar Kompetensi PKL
            </a>
        </li>

        <li>
            <a href="{{ route('siswa.index') }}">
                Daftar Siswa PKL
            </a>
        </li>

        <li>
            <a href="{{ route('perusahaan.index') }}">
                Daftar Perusahaan Mitra
            </a>
        </li>
    </ul>

</div>

@endsection
