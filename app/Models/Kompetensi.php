<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $fillable = [
        'nama_kompetensi',
        'deskripsi',
        'jumlah_siswa'
    ];
}
