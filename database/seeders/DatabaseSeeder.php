<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PerusahaanSeeder::class,
            SiswaSeeder::class,
        ]);
    } 
}
    /**
     * Seed the application's database.
     */
