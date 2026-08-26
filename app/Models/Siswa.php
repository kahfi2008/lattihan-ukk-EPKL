<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;


class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'no_telepon',
        'tanggal_mulai_pkl',
        'tanggal_selesai_pkl',
        'perusahaan_id',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
}
