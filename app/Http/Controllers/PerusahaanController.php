<?php

namespace App\Http\Controllers;
class PerusahaanController extends Controller
{
public function index()
{
 $judulHalaman = 'Daftar Perusahaan Mitra PKL';

 return view('perusahaan.index', compact('judulHalaman',));
}


 public function show($id)
 {
 return 'Menampilkan detail perusahaan dengan ID: ' . $id;
 }
}
