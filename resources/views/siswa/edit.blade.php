@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<div style="max-width: 800px; margin: 30px auto;">

    <h1>Edit Siswa</h1>

    <div style="
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    ">

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">

            @csrf
            @method('PUT')

            <label>NIS</label>
            <input type="text"
                   name="nis"
                   value="{{ $siswa->nis }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>Nama</label>
            <input type="text"
                   name="nama"
                   value="{{ $siswa->nama }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>Kelas</label>
            <input type="text"
                   name="kelas"
                   value="{{ $siswa->kelas }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>Jurusan</label>
            <input type="text"
                   name="jurusan"
                   value="{{ $siswa->jurusan }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>No. Telepon</label>
            <input type="text"
                   name="no_telepon"
                   value="{{ $siswa->no_telepon }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>Tanggal Mulai PKL</label>
            <input type="date"
                   name="tanggal_mulai_pkl"
                   value="{{ $siswa->tanggal_mulai_pkl }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>Tanggal Selesai PKL</label>
            <input type="date"
                   name="tanggal_selesai_pkl"
                   value="{{ $siswa->tanggal_selesai_pkl }}"
                   required
                   style="width:100%; padding:10px; margin:5px 0 15px; box-sizing:border-box;">

            <label>Perusahaan</label>
            <select name="perusahaan_id"
                    required
                    style="width:100%; padding:10px; margin:5px 0 20px; box-sizing:border-box;">

                <option value="">-- Pilih Perusahaan --</option>

                @foreach($perusahaan as $p)

                    <option value="{{ $p->id }}"
                        {{ $siswa->perusahaan_id == $p->id ? 'selected' : '' }}>
                        {{ $p->nama_perusahaan }}
                    </option>

                @endforeach

            </select>

            <button type="submit"
                    style="
                        background:#3498db;
                        color:white;
                        border:none;
                        padding:10px 20px;
                        border-radius:5px;
                        cursor:pointer;
                    ">
                Simpan Perubahan
            </button>

            <a href="{{ route('siswa.index') }}"
               style="
                   background:#6c757d;
                   color:white;
                   padding:10px 20px;
                   border-radius:5px;
                   text-decoration:none;
                   margin-left:5px;
               ">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection
