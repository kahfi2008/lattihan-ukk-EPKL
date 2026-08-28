@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')

<h1>Daftar Siswa</h1>

<p>
    <a href="{{ route('siswa.create') }}"
       style="background: #3498db; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none;">
        + Tambah Siswa
    </a>
</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No. Telepon</th>
            <th>Tanggal Mulai PKL</th>
            <th>Tanggal Selesai PKL</th>
            <th>Perusahaan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->no_telepon }}</td>
            <td>{{ $s->tanggal_mulai_pkl }}</td>
            <td>{{ $s->tanggal_selesai_pkl }}</td>
            <td>{{ $s->perusahaan->nama_perusahaan ?? '-' }}</td>

            <td>
                <a href="{{ route('siswa.show', $s->id) }}">
                    Detail
                </a>

                <a href="{{ route('siswa.edit', $s->id) }}">
                    Edit
                </a>

                <form action="{{ route('siswa.destroy', $s->id) }}"
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
