@extends('layouts.app')

@section('content')

<div style="
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
">

    {{-- Header --}}
    <div style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    ">

        <div>
            <h2 style="
                margin: 0;
                font-size: 26px;
                font-weight: bold;
                color: #111827;
            ">
                Daftar Perusahaan
            </h2>

            <p style="
                margin: 5px 0 0;
                color: #6b7280;
            ">
                Data perusahaan tempat siswa melaksanakan PKL.
            </p>
        </div>

        <a href="{{ route('perusahaan.create') }}"
           style="
                background: #2563eb;
                color: white;
                padding: 10px 18px;
                border-radius: 8px;
                text-decoration: none;
                font-weight: bold;
           ">
            + Tambah Perusahaan
        </a>

    </div>


    {{-- Alert --}}
    @if(session('success'))
        <div style="
            background: #dcfce7;
            color: #166534;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        ">
            {{ session('success') }}
        </div>
    @endif


    {{-- Tabel --}}
    <div style="overflow-x: auto;">

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

                    <th style="padding: 13px; text-align: center;">
                        No
                    </th>

                    <th style="padding: 13px; text-align: left;">
                        Nama Perusahaan
                    </th>

                    <th style="padding: 13px; text-align: left;">
                        Bidang Usaha
                    </th>

                    <th style="padding: 13px; text-align: left;">
                        Alamat
                    </th>

                      <th style="padding: 13px; text-align: left;">
                        Pembimbing
                    </th>

                    <th style="padding: 13px; text-align: left;">
                        No. Telepon
                    </th>

                    <th style="padding: 13px; text-align: center;">
                        Jumlah Siswa
                    </th>

                    <th style="padding: 13px; text-align: left;">
                        Aksi
                    </th>

                </tr>
            </thead>


            <tbody>

                @forelse($perusahaan as $item)

                    <tr style="
                        border-bottom: 1px solid #e5e7eb;
                    ">

                        <td style="
                            padding: 13px;
                            text-align: center;
                        ">
                            {{ $loop->iteration }}
                        </td>


                        <td style="
                            padding: 13px;
                            font-weight: bold;
                        ">
                            {{ $item->nama_perusahaan }}
                        </td>


                        <td style="padding: 13px;">
                            {{ $item->bidang_usaha }}
                        </td>


                        <td style="padding: 13px;">
                            {{ $item->alamat }}
                        </td>

                          <td style="padding: 13px;">
                            {{ $item->pembimbing }}
                        </td>



                        <td style="padding: 13px;">
                            {{ $item->no_telepon }}
                        </td>


                        {{-- JUMLAH SISWA OTOMATIS --}}
                        <td style="
                            padding: 13px;
                            text-align: center;
                            font-weight: bold;
                        ">

                            {{ $item->siswas_count }}

                        </td>


                        {{-- AKSI --}}
                        <td style="
                            padding: 13px;
                            white-space: nowrap;
                        ">

                            <a href="{{ route('perusahaan.show', $item->id) }}"
                               style="
                                    background: #0ea5e9;
                                    color: white;
                                    padding: 6px 10px;
                                    border-radius: 6px;
                                    text-decoration: none;
                                    font-size: 12px;
                               ">
                                Detail
                            </a>


                            <a href="{{ route('perusahaan.edit', $item->id) }}"
                               style="
                                    background: #16a34a;
                                    color: white;
                                    padding: 6px 10px;
                                    border-radius: 6px;
                                    text-decoration: none;
                                    font-size: 12px;
                               ">
                                Edit
                            </a>


                            <form action="{{ route('perusahaan.destroy', $item->id) }}"
                                  method="POST"
                                  style="display: inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        style="
                                            background: #dc2626;
                                            color: white;
                                            border: none;
                                            padding: 6px 10px;
                                            border-radius: 6px;
                                            font-size: 12px;
                                            cursor: pointer;
                                        ">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            style="
                                padding: 30px;
                                text-align: center;
                                color: #6b7280;
                            ">

                            Belum ada data perusahaan.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection