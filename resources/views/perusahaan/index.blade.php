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
                    Daftar Perusahaan
                </h2>

                <p style="
                    margin: 6px 0 0;
                    color: #777;
                    font-size: 14px;
                ">
                    Data perusahaan tempat siswa melaksanakan PKL.
                </p>
            </div>

            <a
                href="{{ route('perusahaan.create') }}"
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
                + Tambah Perusahaan
            </a>

        </div>


        {{-- Alert Success --}}
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

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                        ">
                            No
                        </th>

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                            text-align: left;
                        ">
                            Nama Perusahaan
                        </th>

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                            text-align: left;
                        ">
                            Bidang Usaha
                        </th>

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                            text-align: left;
                        ">
                            Alamat
                        </th>

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                            text-align: left;
                        ">
                            No. Telepon
                        </th>

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                            text-align: left;
                        ">
                            Jumlah Siswa
                        </th>

                        <th style="
                            padding: 13px 12px;
                            border: 1px solid #ddd;
                            text-align: left;
                        ">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($perusahaan as $index => $item)

                        <tr>

                            {{-- No --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                text-align: center;
                            ">
                                {{ $index + 1 }}
                            </td>


                            {{-- Nama --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                <strong>
                                    {{ $item->nama_perusahaan }}
                                </strong>
                            </td>


                            {{-- Bidang Usaha --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->bidang_usaha ?? '-' }}
                            </td>


                            {{-- Alamat --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->alamat ?? '-' }}
                            </td>


                            {{-- Telepon --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                            ">
                                {{ $item->no_telepon ?? '-' }}
                            </td>


                            {{-- Jumlah Siswa --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                text-align: center;
                            ">
                                {{ $item->jumlah_siswa ?? 0 }}
                            </td>


                            {{-- Aksi --}}
                            <td style="
                                padding: 12px;
                                border: 1px solid #ddd;
                                white-space: nowrap;
                            ">

                                <a
                                    href="{{ route('perusahaan.show', $item->id) }}"
                                    style="
                                        display: inline-block;
                                        padding: 6px 10px;
                                        background: #0ea5e9;
                                        color: white;
                                        text-decoration: none;
                                        border-radius: 6px;
                                        font-size: 12px;
                                        font-weight: 600;
                                        margin-right: 4px;
                                    "
                                >
                                    Detail
                                </a>

                                <a
                                    href="{{ route('perusahaan.edit', $item->id) }}"
                                    style="
                                        display: inline-block;
                                        padding: 6px 10px;
                                        background: #16a34a;
                                        color: white;
                                        text-decoration: none;
                                        border-radius: 6px;
                                        font-size: 12px;
                                        font-weight: 600;
                                        margin-right: 4px;
                                    "
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('perusahaan.destroy', $item->id) }}"
                                    method="POST"
                                    style="display: inline;"
                                    onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        style="
                                            padding: 6px 10px;
                                            background: #dc2626;
                                            color: white;
                                            border: none;
                                            border-radius: 6px;
                                            font-size: 12px;
                                            font-weight: 600;
                                            cursor: pointer;
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
                                colspan="7"
                                style="
                                    padding: 25px;
                                    text-align: center;
                                    border: 1px solid #ddd;
                                    color: #777;
                                "
                            >
                                Belum ada data perusahaan.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection