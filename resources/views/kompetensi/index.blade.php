@extends('layouts.app')

@section('title', 'Kompetensi')

@section('content')

<h1>Daftar Kompetensi</h1>

<a href="{{ route('kompetensi.create') }}">
    + Tambah Kompetensi
</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>No</th>
        <th>Nama Kompetensi</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    @forelse ($kompetensi as $index => $k)

    <tr>
        <td>{{ $index + 1 }}</td>

        <td>
            {{ $k->nama_kompetensi }}
        </td>

        <td>
            {{ $k->deskripsi }}
        </td>

        <td>

            <a href="{{ route('kompetensi.show', $k->id) }}">
                Detail
            </a>

            <a href="{{ route('kompetensi.edit', $k->id) }}">
                Edit
            </a>

            <form action="{{ route('kompetensi.destroy', $k->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>

            </form>

        </td>
    </tr>

    @empty

    <tr>
        <td colspan="4">
            Belum ada data kompetensi.
        </td>
    </tr>

    @endforelse

</table>

@endsection
