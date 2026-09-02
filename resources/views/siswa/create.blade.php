@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 800px; margin: 0 auto;">

    <div style="
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    ">

        <div style="margin-bottom: 25px;">

            <h2 style="
                margin: 0;
                font-size: 24px;
                color: #222;
            ">
                Tambah Siswa
            </h2>

            <p style="
                margin: 8px 0 0;
                color: #777;
                font-size: 14px;
            ">
                Tambahkan data siswa baru.
            </p>

        </div>

        <form action="{{ route('siswa.store') }}" method="POST">

            @csrf

            {{-- NIS --}}
            <div style="margin-bottom: 18px;">

                <label for="nis" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    NIS
                </label>

                <input
                    type="text"
                    id="nis"
                    name="nis"
                    value="{{ old('nis') }}"
                    placeholder="Masukkan NIS siswa"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                    "
                    required
                >

                @error('nis')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Nama --}}
            <div style="margin-bottom: 18px;">

                <label for="nama" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama siswa"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                    "
                    required
                >

                @error('nama')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Kelas --}}
            <div style="margin-bottom: 18px;">

                <label for="kelas" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Kelas
                </label>

                <input
                    type="text"
                    id="kelas"
                    name="kelas"
                    value="{{ old('kelas') }}"
                    placeholder="Contoh: XII RPL 1"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                    "
                    required
                >

                @error('kelas')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Jurusan --}}
            <div style="margin-bottom: 18px;">

                <label for="jurusan" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Jurusan
                </label>

                <input
                    type="text"
                    id="jurusan"
                    name="jurusan"
                    value="{{ old('jurusan') }}"
                    placeholder="Contoh: Rekayasa Perangkat Lunak"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                    "
                    required
                >

                @error('jurusan')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Perusahaan --}}
            <div style="margin-bottom: 18px;">

                <label for="perusahaan_id" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Perusahaan
                </label>

                <select
                    id="perusahaan_id"
                    name="perusahaan_id"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                        background: white;
                    "
                    required
                >

                    <option value="">
                        -- Pilih Perusahaan --
                    </option>

                    @foreach($perusahaan as $item)

                        <option
                            value="{{ $item->id }}"
                            {{ old('perusahaan_id') == $item->id ? 'selected' : '' }}
                        >
                            {{ $item->nama_perusahaan }}
                        </option>

                    @endforeach

                </select>

                @error('perusahaan_id')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Tanggal Mulai PKL --}}
            <div style="margin-bottom: 18px;">

                <label for="tanggal_mulai_pkl" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Tanggal Mulai PKL
                </label>

                <input
                    type="date"
                    id="tanggal_mulai_pkl"
                    name="tanggal_mulai_pkl"
                    value="{{ old('tanggal_mulai_pkl') }}"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                    "
                    required
                >

                @error('tanggal_mulai_pkl')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Tanggal Selesai PKL --}}
            <div style="margin-bottom: 18px;">

                <label for="tanggal_selesai_pkl" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Tanggal Selesai PKL
                </label>

                <input
                    type="date"
                    id="tanggal_selesai_pkl"
                    name="tanggal_selesai_pkl"
                    value="{{ old('tanggal_selesai_pkl') }}"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                    "
                    required
                >

                @error('tanggal_selesai_pkl')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            {{-- Kompetensi --}}
            <div style="margin-bottom: 25px;">

                <label style="
                    display: block;
                    margin-bottom: 10px;
                    font-weight: 600;
                    color: #333;
                ">
                    Kompetensi
                </label>

                @foreach($kompetensi as $item)

                    <div style="margin-bottom: 8px;">

                        <label style="
                            font-weight: normal;
                            color: #333;
                        ">

                            <input
                                type="checkbox"
                                name="kompetensi[]"
                                value="{{ $item->id }}"
                                {{ in_array($item->id, old('kompetensi', [])) ? 'checked' : '' }}
                            >

                            {{ $item->nama_kompetensi }}

                        </label>

                    </div>

                @endforeach

            </div>


            {{-- Tombol --}}
            <div style="
                display: flex;
                gap: 10px;
                align-items: center;
            ">

                <a
                    href="{{ route('siswa.index') }}"
                    style="
                        display: inline-block;
                        padding: 10px 18px;
                        background: #f3f4f6;
                        color: #374151;
                        text-decoration: none;
                        border-radius: 8px;
                        font-size: 14px;
                        font-weight: 600;
                    "
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    style="
                        padding: 10px 20px;
                        background: #2563eb;
                        color: white;
                        border: none;
                        border-radius: 8px;
                        font-size: 14px;
                        font-weight: 600;
                        cursor: pointer;
                    "
                >
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection