@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

<div style="max-width: 800px; margin: 30px auto;">

    <h1>Detail Siswa</h1>

    <div style="
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    ">

        <table style="width: 100%; border-collapse: collapse;">

            <tr>
                <th style="text-align: left; padding: 12px;">
                    NIS
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->nis }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    Nama
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->nama }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    Kelas
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->kelas }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    Jurusan
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->jurusan }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    No. Telepon
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->no_telepon }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    Tanggal Mulai PKL
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->tanggal_mulai_pkl }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    Tanggal Selesai PKL
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->tanggal_selesai_pkl }}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; padding: 12px;">
                    Perusahaan
                </th>
                <td style="padding: 12px;">
                    {{ $siswa->perusahaan->nama_perusahaan ?? '-' }}
                </td>
            </tr>

        </table>

        <br>

        <a href="{{ route('siswa.edit', $siswa->id) }}"
           style="
               background: #f39c12;
               color: white;
               padding: 10px 15px;
               border-radius: 5px;
               text-decoration: none;
           ">
            Edit
        </a>

        <a href="{{ route('siswa.index') }}"
           style="
               background: #6c757d;
               color: white;
               padding: 10px 15px;
               border-radius: 5px;
               text-decoration: none;
               margin-left: 5px;
           ">
            Kembali
        </a>

    </div>

</div>

@endsection
