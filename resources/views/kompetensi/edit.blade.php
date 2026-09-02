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
                Edit Kompetensi
            </h2>

            <p style="
                margin: 8px 0 0;
                color: #777;
                font-size: 14px;
            ">
                Perbarui data kompetensi.
            </p>
        </div>

        <form action="{{ route('kompetensi.update', $kompetensi->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Nama Kompetensi --}}
            <div style="margin-bottom: 20px;">
                <label for="nama_kompetensi" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Nama Kompetensi
                </label>

                <input
                    type="text"
                    id="nama_kompetensi"
                    name="nama_kompetensi"
                    value="{{ old('nama_kompetensi', $kompetensi->nama_kompetensi) }}"
                    placeholder="Contoh: HTML & CSS"
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                        outline: none;
                    "
                    required
                >

                @error('nama_kompetensi')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            {{-- Deskripsi --}}
            <div style="margin-bottom: 25px;">
                <label for="deskripsi" style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                ">
                    Deskripsi
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    rows="5"
                    placeholder="Masukkan deskripsi kompetensi..."
                    style="
                        width: 100%;
                        box-sizing: border-box;
                        padding: 11px 14px;
                        border: 1px solid #d1d5db;
                        border-radius: 8px;
                        font-size: 14px;
                        resize: vertical;
                        outline: none;
                    "
                >{{ old('deskripsi', $kompetensi->deskripsi) }}</textarea>

                @error('deskripsi')
                    <small style="color: #dc2626;">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            {{-- Tombol --}}
            <div style="
                display: flex;
                gap: 10px;
                align-items: center;
            ">

                <a href="{{ route('kompetensi.index') }}" style="
                    display: inline-block;
                    padding: 10px 18px;
                    background: #f3f4f6;
                    color: #374151;
                    text-decoration: none;
                    border-radius: 8px;
                    font-size: 14px;
                    font-weight: 600;
                ">
                    Kembali
                </a>

                <button type="submit" style="
                    padding: 10px 20px;
                    background: #2563eb;
                    color: white;
                    border: none;
                    border-radius: 8px;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                ">
                    Update
                </button>

            </div>

        </form>

    </div>

</div>
@endsection