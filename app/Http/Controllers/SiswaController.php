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
            'tanggal_selesai_pkl' => 'required|date',
            'perusahaan_id' => 'required'
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'no_telepon' => $request->no_telepon,
            'tanggal_mulai_pkl' => $request->tanggal_mulai_pkl,
            'tanggal_selesai_pkl' => $request->tanggal_selesai_pkl,
            'perusahaan_id' => $request->perusahaan_id
        ]);

        return redirect()->route('siswa.index');
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
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_telepon' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date',
            'perusahaan_id' => 'required'
        ]);

        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'no_telepon' => $request->no_telepon,
            'tanggal_mulai_pkl' => $request->tanggal_mulai_pkl,
            'tanggal_selesai_pkl' => $request->tanggal_selesai_pkl,
            'perusahaan_id' => $request->perusahaan_id
        ]);

        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('siswa.index');
    }
}
