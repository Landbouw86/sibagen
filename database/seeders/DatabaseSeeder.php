<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SuratKategoriSeeder::class);
        $this->call(KpPeriodeSeeder::class);
        $this->call(KpKategoriSeeder::class);
        $this->call(PnsKategoriSeeder::class);
        $this->call(KgbKategoriSeeder::class);
        $this->call(GolRuangSeeder::class);
        $this->call(UnitKerjaSeeder::class);
        // \App\Models\Surat::factory(120)->create();
        // \App\Models\Kpn::factory(120)->create();
        // $this->call(DbsapkSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
