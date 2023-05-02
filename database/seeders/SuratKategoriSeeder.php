<?php

namespace Database\Seeders;

use App\Models\SuratKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuratKategori::create(['name' => 'Surat Masuk','category_id' => 1]);
        SuratKategori::create(['name' => 'Surat Keluar','category_id' => 1]);
    }
}
