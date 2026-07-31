<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'PT Maju Jaya',
                'alamat' => 'Jakarta',
                'no_telp' => '08123456789',
                'nama_pembimbing_industri' => 'Siti Amelia',
            ],
            [
                'nama' => 'PT Teknologi Indonesia',
                'alamat' => 'Bandung',
                'no_telp' => '08234567890',
                'nama_pembimbing_industri' => 'Budi Santoso',
            ],
        ];

        foreach ($data as $item) {
            Perusahaan::create($item);
        }
    }
}