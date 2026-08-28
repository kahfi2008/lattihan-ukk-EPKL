@extends('layouts.app')

@section('title', 'Daftar Kompetensi')

@section('content')

<h1>Daftar Kompetensi</h1>

<p>
    <a href="{{ route('kompetensi.create') }}"
       style="background: #3498db; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none;">
        + Tambah Kompetensi
    </a>
</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kompetensi</th>
            <th>Deskripsi</th>
            <th>Jumlah Siswa</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($kompetensis as $kompetensi)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kompetensi->nama_kompetensi }}</td>
            <td>{{ $kompetensi->deskripsi }}</td>
            <td>{{ $kompetensi->jumlah_siswa }}</td>

            <td>
                <a href="{{ route('kompetensi.show', $kompetensi->id) }}">
                    Detail
                </a>

                <a href="{{ route('kompetensi.edit', $kompetensi->id) }}">
                    Edit
                </a>

                <form action="{{ route('kompetensi.destroy', $kompetensi->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
