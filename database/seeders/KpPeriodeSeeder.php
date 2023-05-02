<?php

namespace Database\Seeders;

use App\Models\KpPeriode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KpPeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KpPeriode::create(['name' => 'April','category_id' => 2]);
        KpPeriode::create(['name' => 'Oktober','category_id' => 2]);
    }
}
