@extends('layouts.app')

@section('title', 'Daftar Perusahaan')

@section('content')

<h1>Daftar Perusahaan</h1>

<a href="{{ route('perusahaan.create') }}"
   style="background: #3498db; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none;">
    + Tambah Perusahaan
</a>

<br><br>

<table border="1" cellpadding="10">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Bidang Usaha</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Jumlah Siswa</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($perusahaan as $p)

        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{ $p->nama_perusahaan }}</td>

            <td>{{ $p->bidang_usaha }}</td>

            <td>{{ $p->alamat }}</td>

            <td>{{ $p->no_telepon }}</td>

            <td>{{ $p->jumlah_siswa }}</td>

            <td>

                {{-- DETAIL --}}
                <a href="{{ route('perusahaan.show', $p->id) }}">
                    Detail
                </a>

                |

                {{-- EDIT --}}
                <a href="{{ route('perusahaan.edit', $p->id) }}">
                    Edit
                </a>

                |

                {{-- HAPUS --}}
                <form action="{{ route('perusahaan.destroy', $p->id) }}"
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
            <td colspan="7">
                Belum ada data perusahaan.
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection
