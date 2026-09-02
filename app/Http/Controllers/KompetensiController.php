<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    /**
     * Menampilkan semua data kompetensi
     * beserta jumlah siswa secara otomatis.
     */
    public function index()
    {
        $kompetensi = Kompetensi::withCount('siswas')
            ->latest()
            ->get();

        return view('kompetensi.index', compact('kompetensi'));
    }

    /**
     * Menampilkan detail kompetensi
     * beserta siswa yang memiliki kompetensi tersebut.
     */
    public function show(Kompetensi $kompetensi)
    {
        $kompetensi->load('siswas');

        return view('kompetensi.show', compact('kompetensi'));
    }

    /**
     * Menampilkan form tambah kompetensi.
     */
    public function create()
    {
        $siswas = Siswa::all();

        return view('kompetensi.create', compact('siswas'));
    }

    /**
     * Menyimpan kompetensi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'nullable',
            'siswa_id' => 'nullable|array',
        ]);

        $kompetensi = Kompetensi::create([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->filled('siswa_id')) {
            $kompetensi->siswas()->sync($request->siswa_id);
        }

        return redirect()
            ->route('kompetensi.index')
            ->with('success', 'Kompetensi berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit kompetensi.
     */
    public function edit(Kompetensi $kompetensi)
    {
        $siswas = Siswa::all();

        $kompetensi->load('siswas');

        return view('kompetensi.edit', compact('kompetensi', 'siswas'));
    }

    /**
     * Mengupdate kompetensi.
     */
    public function update(Request $request, Kompetensi $kompetensi)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'nullable',
            'siswa_id' => 'nullable|array',
        ]);

        $kompetensi->update([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
        ]);

        $kompetensi->siswas()->sync($request->siswa_id ?? []);

        return redirect()
            ->route('kompetensi.index')
            ->with('success', 'Kompetensi berhasil diperbarui.');
    }

    /**
     * Menghapus kompetensi.
     */
    public function destroy(Kompetensi $kompetensi)
    {
        $kompetensi->siswas()->detach();

        $kompetensi->delete();

        return redirect()
            ->route('kompetensi.index')
            ->with('success', 'Kompetensi berhasil dihapus.');
    }
}