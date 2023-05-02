<?php

namespace Database\Seeders;

use App\Models\KgbKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KgbKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KgbKategori::create(['name' => 'Daftar Pengusulan','category_id' => 4]);
        KgbKategori::create(['name' => 'Daftar Pencetakan','category_id' => 4]);
    }
}
