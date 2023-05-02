<?php

namespace Database\Seeders;

use App\Models\GolRuang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GolRuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GolRuang::create(['name' => 'IV/d']);
        GolRuang::create(['name' => 'IV/c']);
        GolRuang::create(['name' => 'IV/b']);
        GolRuang::create(['name' => 'IV/a']);
        GolRuang::create(['name' => 'III/d']);
        GolRuang::create(['name' => 'III/c']);
        GolRuang::create(['name' => 'III/b']);
        GolRuang::create(['name' => 'III/a']);
        GolRuang::create(['name' => 'II/d']);
        GolRuang::create(['name' => 'II/c']);
        GolRuang::create(['name' => 'II/b']);
        GolRuang::create(['name' => 'II/a']);
        GolRuang::create(['name' => 'I/d']);
        GolRuang::create(['name' => 'I/c']);
        GolRuang::create(['name' => 'I/b']);
        GolRuang::create(['name' => 'I/a']);
    }
}
