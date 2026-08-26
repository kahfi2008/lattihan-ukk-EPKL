<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('perusahaan')->get();

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $perusahaan = Perusahaan::all();

        return view('siswa.create', compact('perusahaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_telepon' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date|after_or_equal:tanggal_mulai_pkl',
            'perusahaan_id' => 'required',
        ]);

        $siswa = new Siswa();

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->no_telepon = $request->no_telepon;
        $siswa->tanggal_mulai_pkl = $request->tanggal_mulai_pkl;
        $siswa->tanggal_selesai_pkl = $request->tanggal_selesai_pkl;
        $siswa->perusahaan_id = $request->perusahaan_id;

        $siswa->save();

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $siswa = Siswa::with('perusahaan')->findOrFail($id);

        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $perusahaan = Perusahaan::all();

        return view('siswa.edit', compact('siswa', 'perusahaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_telepon' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date|after_or_equal:tanggal_mulai_pkl',
            'perusahaan_id' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->no_telepon = $request->no_telepon;
        $siswa->tanggal_mulai_pkl = $request->tanggal_mulai_pkl;
        $siswa->tanggal_selesai_pkl = $request->tanggal_selesai_pkl;
        $siswa->perusahaan_id = $request->perusahaan_id;

        $siswa->save();

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil dihapus.');
    }
}
