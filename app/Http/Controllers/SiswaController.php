<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Perusahaan;
use App\Models\Kompetensi;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan semua data siswa.
     */
    public function index()
    {
        $siswa = Siswa::with([
            'perusahaan',
            'kompetensi'
        ])->latest()->get();

        return view('siswa.index', compact('siswa'));
    }

    /**
     * Menampilkan form tambah siswa.
     */
    public function create()
    {
        $perusahaan = Perusahaan::latest()->get();
        $kompetensi = Kompetensi::latest()->get();

        return view('siswa.create', compact(
            'perusahaan',
            'kompetensi'
        ));
    }

    /**
     * Menyimpan data siswa baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'perusahaan_id' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date',
        ]);

        $siswa = Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'perusahaan_id' => $request->perusahaan_id,
            'tanggal_mulai_pkl' => $request->tanggal_mulai_pkl,
            'tanggal_selesai_pkl' => $request->tanggal_selesai_pkl,
        ]);

        $siswa->kompetensi()->sync(
            $request->kompetensi ?? []
        );

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail siswa.
     */
    public function show(Siswa $siswa)
    {
        $siswa->load([
            'perusahaan',
            'kompetensi'
        ]);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Menampilkan form edit siswa.
     */
    public function edit(Siswa $siswa)
    {
        $perusahaan = Perusahaan::latest()->get();
        $kompetensi = Kompetensi::latest()->get();

        $siswa->load('kompetensi');

        return view('siswa.edit', compact(
            'siswa',
            'perusahaan',
            'kompetensi'
        ));
    }

    /**
     * Mengupdate data siswa.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'perusahaan_id' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date',
        ]);

        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'perusahaan_id' => $request->perusahaan_id,
            'tanggal_mulai_pkl' => $request->tanggal_mulai_pkl,
            'tanggal_selesai_pkl' => $request->tanggal_selesai_pkl,
        ]);

        $siswa->kompetensi()->sync(
            $request->kompetensi ?? []
        );

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Menghapus data siswa.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->kompetensi()->detach();

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}