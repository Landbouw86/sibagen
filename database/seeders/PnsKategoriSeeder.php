<?php

namespace Database\Seeders;

use App\Models\PnsKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PnsKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PnsKategori::create(['name' => 'Daftar Pengusulan','category_id' => 3]);
        PnsKategori::create(['name' => 'Daftar Pencetakan','category_id' => 3]);
    }
}
