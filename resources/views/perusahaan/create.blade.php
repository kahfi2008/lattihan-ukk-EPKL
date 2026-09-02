@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin: 0 auto;">

    <div style="
        background:white;
        padding:30px;
        border-radius:12px;
        box-shadow:0 4px 12px rgba(0,0,0,0.08);
    ">

        <div style="margin-bottom:25px;">
            <h2 style="margin:0; font-size:24px; color:#222;">
                Tambah Perusahaan
            </h2>

            <p style="margin:8px 0 0; color:#777; font-size:14px;">
                Tambahkan data perusahaan baru.
            </p>
        </div>

        <form action="{{ route('perusahaan.store') }}" method="POST">
            @csrf

            {{-- Nama Perusahaan --}}
            <div style="margin-bottom:18px;">
                <label for="nama_perusahaan" style="display:block; margin-bottom:8px; font-weight:600;">
                    Nama Perusahaan
                </label>

                <input type="text"
                    id="nama_perusahaan"
                    name="nama_perusahaan"
                    value="{{ old('nama_perusahaan') }}"
                    placeholder="Masukkan nama perusahaan"
                    style="width:100%; box-sizing:border-box; padding:11px 14px; border:1px solid #d1d5db; border-radius:8px; font-size:14px;"
                    required>
            </div>

            {{-- Bidang Usaha --}}
            <div style="margin-bottom:18px;">
                <label for="bidang_usaha" style="display:block; margin-bottom:8px; font-weight:600;">
                    Bidang Usaha
                </label>

                <input type="text"
                    id="bidang_usaha"
                    name="bidang_usaha"
                    value="{{ old('bidang_usaha') }}"
                    placeholder="Contoh: Teknologi Informasi"
                    style="width:100%; box-sizing:border-box; padding:11px 14px; border:1px solid #d1d5db; border-radius:8px; font-size:14px;"
                    required>
            </div>

            {{-- Alamat --}}
            <div style="margin-bottom:18px;">
                <label for="alamat" style="display:block; margin-bottom:8px; font-weight:600;">
                    Alamat
                </label>

                <textarea
                    id="alamat"
                    name="alamat"
                    rows="4"
                    placeholder="Masukkan alamat perusahaan"
                    style="width:100%; box-sizing:border-box; padding:11px 14px; border:1px solid #d1d5db; border-radius:8px; font-size:14px; resize:vertical;"
                    required>{{ old('alamat') }}</textarea>
            </div>

            {{-- No Telepon --}}
            <div style="margin-bottom:18px;">
                <label for="no_telepon" style="display:block; margin-bottom:8px; font-weight:600;">
                    No. Telepon
                </label>

                <input type="text"
                    id="no_telepon"
                    name="no_telepon"
                    value="{{ old('no_telepon') }}"
                    placeholder="Contoh: 08123456789"
                    style="width:100%; box-sizing:border-box; padding:11px 14px; border:1px solid #d1d5db; border-radius:8px; font-size:14px;"
                    required>
            </div>

            {{-- Jumlah Siswa --}}
            <div style="margin-bottom:25px;">
                <label for="jumlah_siswa" style="display:block; margin-bottom:8px; font-weight:600;">
                    Jumlah Siswa
                </label>

                <input type="number"
                    id="jumlah_siswa"
                    name="jumlah_siswa"
                    value="{{ old('jumlah_siswa', 0) }}"
                    min="0"
                    placeholder="Contoh: 10"
                    style="width:100%; box-sizing:border-box; padding:11px 14px; border:1px solid #d1d5db; border-radius:8px; font-size:14px;"
                    required>
            </div>

            {{-- Tombol --}}
            <div style="display:flex; gap:10px;">

                <a href="{{ route('perusahaan.index') }}"
                    style="
                        display:inline-block;
                        padding:10px 18px;
                        background:#f3f4f6;
                        color:#374151;
                        text-decoration:none;
                        border-radius:8px;
                        font-size:14px;
                        font-weight:600;
                    ">
                    Kembali
                </a>

                <button type="submit"
                    style="
                        padding:10px 20px;
                        background:#2563eb;
                        color:white;
                        border:none;
                        border-radius:8px;
                        font-size:14px;
                        font-weight:600;
                        cursor:pointer;
                    ">
                    Simpan
                </button>

            </div>

        </form>
    </div>

</div>
@endsection