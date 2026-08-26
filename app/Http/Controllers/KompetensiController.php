<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi::all();

        return view('kompetensi.index', compact('kompetensi'));
    }

    public function create()
    {
        return view('kompetensi.create');
    }

    public function store(Request $request)
    {
        Kompetensi::create([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('kompetensi.index');
    }

    public function show(Kompetensi $kompetensi)
    {
        return view('kompetensi.show', compact('kompetensi'));
    }

    public function edit(Kompetensi $kompetensi)
    {
        return view('kompetensi.edit', compact('kompetensi'));
    }

    public function update(Request $request, Kompetensi $kompetensi)
    {
        $kompetensi->update([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('kompetensi.index');
    }

    public function destroy(Kompetensi $kompetensi)
    {
        $kompetensi->delete();

        return redirect()->route('kompetensi.index');
    }
}
