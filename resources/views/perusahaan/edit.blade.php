@extends('layouts.app')

@section('content')

<div style="
    max-width: 800px;
    margin: auto;
">

    <div style="
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    ">

        <h2 style="
            margin-top: 0;
            color: #111827;
        ">
            Edit Perusahaan
        </h2>

        <p style="
            color: #6b7280;
            margin-bottom: 25px;
        ">
            Ubah data perusahaan.
        </p>


        {{-- Error --}}
        @if($errors->any())

            <div style="
                background: #fee2e2;
                color: #991b1b;
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
            ">

                <ul style="margin: 0; padding-left: 20px;">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form action="{{ route('perusahaan.update', $perusahaan->id) }}"
              method="POST">

            @csrf

            @method('PUT')


            {{-- Nama Perusahaan --}}
            <div style="margin-bottom: 18px;">

                <label>
                    Nama Perusahaan
                </label>

                <input
                    type="text"
                    name="nama_perusahaan"
                    value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}"
                    required
                    style="
                        width: 100%;
                        padding: 10px;
                        margin-top: 6px;
                        border: 1px solid #d1d5db;
                        border-radius: 7px;
                        box-sizing: border-box;
                    "
                >

            </div>


            {{-- Bidang Usaha --}}
            <div style="margin-bottom: 18px;">

                <label>
                    Bidang Usaha
                </label>

                <input
                    type="text"
                    name="bidang_usaha"
                    value="{{ old('bidang_usaha', $perusahaan->bidang_usaha) }}"
                    required
                    style="
                        width: 100%;
                        padding: 10px;
                        margin-top: 6px;
                        border: 1px solid #d1d5db;
                        border-radius: 7px;
                        box-sizing: border-box;
                    "
                >

            </div>


            {{-- Alamat --}}
            <div style="margin-bottom: 18px;">

                <label>
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    required
                    rows="3"
                    style="
                        width: 100%;
                        padding: 10px;
                        margin-top: 6px;
                        border: 1px solid #d1d5db;
                        border-radius: 7px;
                        box-sizing: border-box;
                    "
                >{{ old('alamat', $perusahaan->alamat) }}</textarea>

            </div>



              {{-- Pembimbing --}}
            <div style="margin-bottom: 18px;">

                <label>
                    Pembimbing
                </label>

                <textarea
                    name="pembimbing"
                    required
                    rows="3"
                    style="
                        width: 100%;
                        padding: 10px;
                        margin-top: 6px;
                        border: 1px solid #d1d5db;
                        border-radius: 7px;
                        box-sizing: border-box;
                    "
                >{{ old('pembimbing', $perusahaan->pembimbing) }}</textarea>

            </div>



            {{-- No Telepon --}}
            <div style="margin-bottom: 25px;">

                <label>
                    No. Telepon
                </label>

                <input
                    type="text"
                    name="no_telepon"
                    value="{{ old('no_telepon', $perusahaan->no_telepon) }}"
                    required
                    style="
                        width: 100%;
                        padding: 10px;
                        margin-top: 6px;
                        border: 1px solid #d1d5db;
                        border-radius: 7px;
                        box-sizing: border-box;
                    "
                >

            </div>


            {{-- Info --}}
            <div style="
                background: #eff6ff;
                color: #1e40af;
                padding: 12px 15px;
                border-radius: 8px;
                margin-bottom: 25px;
            ">

                <strong>Jumlah siswa:</strong>

                {{ $perusahaan->siswas()->count() }}

                siswa

                <br>

                <small>
                    Jumlah siswa dihitung otomatis dari data siswa.
                </small>

            </div>


            {{-- Tombol --}}
            <div>

                <button
                    type="submit"
                    style="
                        background: #16a34a;
                        color: white;
                        border: none;
                        padding: 10px 18px;
                        border-radius: 7px;
                        font-weight: bold;
                        cursor: pointer;
                    "
                >
                    Update
                </button>


                <a
                    href="{{ route('perusahaan.index') }}"
                    style="
                        background: #6b7280;
                        color: white;
                        padding: 10px 18px;
                        border-radius: 7px;
                        text-decoration: none;
                        margin-left: 5px;
                    "
                >
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection