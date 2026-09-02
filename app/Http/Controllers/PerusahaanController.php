<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Menampilkan semua perusahaan.
     */
    public function index()
    {
        $perusahaan = Perusahaan::latest()->get();

        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Menampilkan form tambah perusahaan.
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Menyimpan perusahaan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'bidang_usaha' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'jumlah_siswa' => 'required|integer|min:0',
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'jumlah_siswa' => $request->jumlah_siswa,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail perusahaan.
     */
    public function show(Perusahaan $perusahaan)
    {
        $perusahaan->load('siswas');

        return view('perusahaan.show', compact('perusahaan'));
    }

    /**
     * Menampilkan form edit perusahaan.
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'));
    }

    /**
     * Mengupdate data perusahaan.
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'bidang_usaha' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'jumlah_siswa' => 'required|integer|min:0',
        ]);

        $perusahaan->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'jumlah_siswa' => $request->jumlah_siswa,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil diperbarui.');
    }

    /**
     * Menghapus perusahaan.
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil dihapus.');
    }
}