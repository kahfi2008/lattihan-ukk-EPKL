<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class SiswaFactory extends Factory
{
    public function definition(): array
    {
        $tanggalMulai = fake()->dateTimeBetween('-3 months', 'now');

        return [
            'nis' => fake()->unique()->numerify('#########'),
            'nama' => fake()->name(),
            'class'=> fake()->randomElement([
                'XI RPL 1',
                'XI RPL 2',
                'XI TKJ 1',
            ]),
            'tanggal_mulai_pkl
        ]
    }
}