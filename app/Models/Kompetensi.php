<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;

    protected $table = 'kompetensis';

    protected $fillable = [
        'nama_kompetensi',
        'deskripsi',
    ];

    public function siswas()
    {
        return $this->belongsToMany(
            Siswa::class,
            'siswa_kompetensi',
            'kompetensi_id',
            'siswa_id'
        );
    }
}