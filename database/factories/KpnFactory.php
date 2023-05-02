<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kpn>
 */
class KpnFactory extends Factory
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
            'nama' => fake()->name(),
            'nip_baru' => fake()->numberBetween(18),
            'gol_ruang_id' => fake()->numberBetween(1,16),
            'tmt_terakhir' => fake()->date(),
            'unor_nama' => fake()->company(),
            'kpn_periode_id' => fake()->numberBetween(1,2),
            'kpn_kategori_id' => fake()->numberBetween(1,7),
        ];
    }
}
