<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perusahaan extends Model
{
    protected $table = 'perusahaans';

    protected $fillable = [
        'nama_perusahaan',
        'bidang_usaha',
        'alamat',
        'pembimbing',
        'no_telepon',
        'jumlah_siswa',
    ];

    public function siswas(): HasMany
    {
        return $this->hasMany(
            Siswa::class,
            'perusahaan_id'
        );
    }
}