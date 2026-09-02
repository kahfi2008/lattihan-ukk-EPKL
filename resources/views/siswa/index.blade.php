@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 1400px; margin: 0 auto;">

    <div style="
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    ">

        {{-- Header --}}
        <div style="
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        ">

            <div>
                <h2 style="
                    margin: 0;
                    font-size: 24px;
                    color: #222;
                ">
                    Daftar Siswa
                </h2>

                <p style="
                    margin: 6px 0 0;
                    color: #777;
                    font-size: 14px;
                ">
                    Data seluruh siswa yang mengikuti PKL.
                </p>
            </div>

            <a
                href="{{ route('siswa.create') }}"
                style="
                    display: inline-block;
                    padding: 10px 18px;
                    background: #2563eb;
                    color: white;
                    text-decoration: none;
                    border-radius: 8px;
                    font-size: 14px;
                    font-weight: 600;
                "
            >
                + Tambah Siswa
            </a>

        </div>


        {{-- Alert --}}
        @if(session('success'))

            <div style="
                background: #dcfce7;
                color: #166534;
                padding: 12px 16px;
                border-radius: 8px;
                margin-bottom: 20px;
                border: 1px solid #bbf7d0;
            ">
                {{ session('success') }}
            </div>

        @endif


        {{-- Error --}}
        @if(session('error'))

            <div style="
                background: #fee2e2;
                color: #991b1b;
                padding: 12px 16px;
                border-radius: 8px;
                margin-bottom: 20px;
                border: 1px solid #fecaca;
            ">
                {{ session('error') }}
            </div>

        @endif


        {{-- Table --}}
        <div style="
            overflow-x: auto;
        ">

            <table style="
                width: 100%;
                border-collapse: collapse;
                font-size: 14px;
            ">

                <thead>

                    <tr style="
                        background: #2563eb;
                        color: white;
                    ">

                        <th style="padding: 13px 12px; border: 1px solid #ddd;">
                            No
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            NIS
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Nama
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Kelas
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Jurusan
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Perusahaan
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Tanggal Mulai
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Tanggal Selesai
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Kompetensi
                        </th>

                        <th style="padding: 13px 12px; border: 1px solid #ddd; text-align:left;">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($siswa as $index => $item)

                        <tr>

                            {{-- No --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                text-align: center;
                            ">
                                {{ $index + 1 }}
                            </td>


                            {{-- NIS --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->nis }}
                            </td>


                            {{-- Nama --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->nama }}
                            </td>


                            {{-- Kelas --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->kelas }}
                            </td>


                            {{-- Jurusan --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->jurusan }}
                            </td>


                            {{-- Perusahaan --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->perusahaan->nama_perusahaan ?? '-' }}
                            </td>


                            {{-- Tanggal Mulai --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                white-space: nowrap;
                            ">
                                @if($item->tanggal_mulai_pkl)
                                    {{ \Carbon\Carbon::parse($item->tanggal_mulai_pkl)->format('d-m-Y') }}
                                @else
                                    -
                                @endif
                            </td>


                            {{-- Tanggal Selesai --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                white-space: nowrap;
                            ">
                                @if($item->tanggal_selesai_pkl)
                                    {{ \Carbon\Carbon::parse($item->tanggal_selesai_pkl)->format('d-m-Y') }}
                                @else
                                    -
                                @endif
                            </td>


                            {{-- Kompetensi --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">

                                @forelse($item->kompetensi as $kompetensi)

                                    <span style="
                                        display: inline-block;
                                        background: #eff6ff;
                                        color: #1d4ed8;
                                        padding: 5px 9px;
                                        border-radius: 6px;
                                        margin: 2px;
                                        font-size: 12px;
                                    ">
                                        {{ $kompetensi->nama_kompetensi }}
                                    </span>

                                @empty

                                    <span style="color: #999;">
                                        -
                                    </span>

                                @endforelse

                            </td>


                            {{-- Aksi --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                white-space: nowrap;
                            ">

                                <a
                                    href="{{ route('siswa.show', $item->id) }}"
                                    style="
                                        color: #2563eb;
                                        text-decoration: none;
                                        margin-right: 8px;
                                    "
                                >
                                    Detail
                                </a>

                                <a
                                    href="{{ route('siswa.edit', $item->id) }}"
                                    style="
                                        color: #16a34a;
                                        text-decoration: none;
                                        margin-right: 8px;
                                    "
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('siswa.destroy', $item->id) }}"
                                    method="POST"
                                    style="display:inline;"
                                    onsubmit="return confirm('Yakin ingin menghapus siswa ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        style="
                                            padding: 5px 10px;
                                            background: #dc2626;
                                            color: white;
                                            border: none;
                                            border-radius: 6px;
                                            cursor: pointer;
                                            font-size: 12px;
                                        "
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="10"
                                style="
                                    padding: 25px;
                                    text-align: center;
                                    border: 1px solid #ddd;
                                    color: #777;
                                "
                            >
                                Belum ada data siswa.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection