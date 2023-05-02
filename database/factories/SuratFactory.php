<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surat>
 */
class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'surat_kategori_id' => fake()->numberBetween(1,2),
            'pengirim' => fake()->company(),
            'tanggal' => fake()->date(),
            'nomor' => fake()->text(20),
            'lampiran' => fake()->text(12),
            'perihal' => fake()->text(200),
            'keterangan' => fake()->text(50),
        ];
    }
}
