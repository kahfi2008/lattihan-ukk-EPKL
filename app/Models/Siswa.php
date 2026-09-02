<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'perusahaan_id',
        'tanggal_mulai_pkl',
        'tanggal_selesai_pkl',
    ];

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(
            Perusahaan::class,
            'perusahaan_id'
        );
    }

    public function kompetensi(): BelongsToMany
    {
        return $this->belongsToMany(
            Kompetensi::class,
            'siswa_kompetensi',
            'siswa_id',
            'kompetensi_id'
        );
    }
}