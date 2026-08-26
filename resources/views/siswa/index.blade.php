@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')

<h1>Daftar Siswa</h1>

<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>

<br><br>

<table border="1" cellpadding="10">

    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No. Telepon</th>
            <th>Mulai PKL</th>
            <th>Selesai PKL</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($siswa as $s)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->no_telepon }}</td>
            <td>{{ $s->tanggal_mulai_pkl }}</td>
            <td>{{ $s->tanggal_selesai_pkl }}</td>

            <td>

                <a href="{{ route('siswa.show', $s->id) }}">
                    Detail
                </a>

                |

                <a href="{{ route('siswa.edit', $s->id) }}">
                    Edit
                </a>

                |

                <form action="{{ route('siswa.destroy', $s->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>

                </form>

            </td>
        </tr>

        @empty

        <tr>
            <td colspan="9">
                Belum ada data siswa.
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection
