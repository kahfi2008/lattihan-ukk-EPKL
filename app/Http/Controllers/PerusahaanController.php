<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Menampilkan daftar perusahaan
     */
    public function index()
    {
        $perusahaan = Perusahaan::withCount('siswas')
            ->latest()
            ->get();

        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Menampilkan form tambah perusahaan
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Menyimpan perusahaan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'bidang_usaha' => 'required',
            'alamat' => 'required',
            'pembimbing' => 'required',
            'no_telepon' => 'required',
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat' => $request->alamat,
            'pembimbing' => $request->pembimbing,
            'no_telepon' => $request->no_telepon,

            // Jumlah siswa dihitung otomatis
            'jumlah_siswa' => 0,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail perusahaan
     */
    public function show(Perusahaan $perusahaan)
    {
        $perusahaan->load('siswas');

        return view('perusahaan.show', compact('perusahaan'));
    }

    /**
     * Menampilkan form edit perusahaan
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'));
    }

    /**
     * Mengupdate perusahaan
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'bidang_usaha' => 'required',
            'alamat' => 'required',
            'pembimbing' => 'required',
            'no_telepon' => 'required',
        ]);

        $perusahaan->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat' => $request->alamat,
            'pembimbing' => $request->pembimbing,
            'no_telepon' => $request->no_telepon,

            // Jumlah siswa tetap dihitung otomatis
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil diperbarui.');
    }

    /**
     * Menghapus perusahaan
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil dihapus.');
    }
}