@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

<div class="container">

    <h1>Detail Siswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>NIS</th>
            <td>{{ $siswa->nis }}</td>
        </tr>

        <tr>
            <th>Nama</th>
            <td>{{ $siswa->nama }}</td>
        </tr>

        <tr>
            <th>Kelas</th>
            <td>{{ $siswa->kelas }}</td>
        </tr>

        <tr>
            <th>Jurusan</th>
            <td>{{ $siswa->jurusan }}</td>
        </tr>

        <tr>
            <th>Perusahaan</th>
            <td>
                {{ $siswa->perusahaan->nama_perusahaan ?? '-' }}
            </td>
        </tr>

        <tr>
            <th>Kompetensi</th>
            <td>

                @forelse($siswa->kompetensi as $item)

                    <div>
                        {{ $item->nama_kompetensi }}
                    </div>

                @empty

                    -

                @endforelse

            </td>
        </tr>

        <tr>
            <th>Tanggal Mulai</th>
            <td>{{ $siswa->tanggal_mulai }}</td>
        </tr>

        <tr>
            <th>Tanggal Selesai</th>
            <td>{{ $siswa->tanggal_selesai }}</td>
        </tr>

    </table>

    <br>

    <a href="{{ route('siswa.index') }}">
        Kembali
    </a>

    |

    <a href="{{ route('siswa.edit', $siswa->id) }}">
        Edit
    </a>

</div>

@endsection