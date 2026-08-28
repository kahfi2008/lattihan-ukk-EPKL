<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensis = Kompetensi::all();

        return view('kompetensi.index', compact('kompetensis'));
    }

    public function create()
    {
        return view('kompetensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'required',
            'jumlah_siswa' => 'required|integer'
        ]);

        Kompetensi::create([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
            'jumlah_siswa' => $request->jumlah_siswa
        ]);

        return redirect()->route('kompetensi.index');
    }

    public function show($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);

        return view('kompetensi.show', compact('kompetensi'));
    }

    public function edit($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);

        return view('kompetensi.edit', compact('kompetensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'required',
            'jumlah_siswa' => 'required|integer'
        ]);

        $kompetensi = Kompetensi::findOrFail($id);

        $kompetensi->nama_kompetensi = $request->nama_kompetensi;
        $kompetensi->deskripsi = $request->deskripsi;
        $kompetensi->jumlah_siswa = $request->jumlah_siswa;

        $kompetensi->save();

        return redirect()->route('kompetensi.index');
    }

    public function destroy($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);

        $kompetensi->delete();

        return redirect()->route('kompetensi.index');
    }
}
