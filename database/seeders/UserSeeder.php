<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $user->assignRole('admin');
        $user->givePermissionTo('create','read','update','delete');

        $user = User::create([
            'name' => 'Operator Surat',
            'email' => 'operator_srt@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $user->assignRole('operator-srt');
        $user->givePermissionTo('create','read');

        $user = User::create([
            'name' => 'Operator Kenaikan Pangkat',
            'email' => 'operator_kpn@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $user->assignRole('operator-kpn');
        $user->givePermissionTo('create','read');

        $user = User::create([
            'name' => 'Operator Pensiun',
            'email' => 'operator_pns@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $user->assignRole('operator-pns');
        $user->givePermissionTo('create','read');

        $user = User::create([
            'name' => 'Operator Gaji Berkala',
            'email' => 'operator_kgb@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $user->assignRole('operator-kgb');
        $user->givePermissionTo('create','read');

    }
}
