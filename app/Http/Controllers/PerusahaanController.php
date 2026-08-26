<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::all();

        return view('perusahaan.index', compact('perusahaan'));
    }

    public function create()
    {
        return view('perusahaan.create');
    }

    public function store(Request $request)
    {
        $perusahaan = new Perusahaan;

        $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        $perusahaan->bidang_usaha = $request->bidang_usaha;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->no_telepon = $request->no_telepon;
        $perusahaan->jumlah_siswa = $request->jumlah_siswa;

        $perusahaan->save();

        return redirect()->route('perusahaan.index');
    }

    public function show(Perusahaan $perusahaan)
    {
        return view('perusahaan.show', compact('perusahaan'));
    }

    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, Perusahaan $perusahaan)
    {
        $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        $perusahaan->bidang_usaha = $request->bidang_usaha;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->no_telepon = $request->no_telepon;
        $perusahaan->jumlah_siswa = $request->jumlah_siswa;

        $perusahaan->save();

        return redirect()->route('perusahaan.index');
    }

    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();

        return redirect()->route('perusahaan.index');
    }
}
