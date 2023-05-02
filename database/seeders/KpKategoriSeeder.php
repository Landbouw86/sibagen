<?php

namespace Database\Seeders;

use App\Models\KpKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KpKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KpKategori::create(['name' => 'Reguler','category_id' => 2]);
        KpKategori::create(['name' => 'Jabatan Struktural','category_id' => 2]);
        KpKategori::create(['name' => 'Jabatan Fungsional Tertentu','category_id' => 2]);
        KpKategori::create(['name' => 'Penyesuaian Ijasah','category_id' => 2]);
        KpKategori::create(['name' => 'TugasBelajar','category_id' => 2]);
        KpKategori::create(['name' => 'Pencantuman Gelar Akademik','category_id' => 2]);
    }
}
