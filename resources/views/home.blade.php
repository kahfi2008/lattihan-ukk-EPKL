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

 <style>
    .menu {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    .menu-tombol {
        display: inline-block;
        padding: 12px 25px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;
    }

    .menu-tombol:hover {
        background-color: #217dbb;
        transform: translateY(-2px);
    }
</style>

<ul class="menu">
    <li>
        <a href="{{ route('kompetensi.index') }}" class="menu-tombol">
            📚 KOMPETENSI
        </a>
    </li>

    <li>
        <a href="{{ route('siswa.index') }}" class="menu-tombol">
            👨‍🎓 DATA SISWA
        </a>
    </li>

    <li>
        <a href="{{ route('perusahaan.index') }}" class="menu-tombol">
            🏢 PERUSAHAAN
        </a>
    </li>
</ul>



</div>

@endsection
