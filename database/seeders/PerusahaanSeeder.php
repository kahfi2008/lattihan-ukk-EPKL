<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    public function run(): void
    {
        Perusahaan::create([
            'nama_perusahaan' => 'PT Maju Jaya',
            'bidang_usaha' => 'Teknologi Informasi',
            'alamat' => 'Jakarta',
            'no_telepon' => '08123456789',
            'jumlah_siswa' => 0,
        ]);
    }
}