<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PENDIDIKAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS KESEHATAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PEKERJAAN UMUM DAN TATA RUANG']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PERUMAHAN DAN KAWASAN PEMUKIMAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PERHUBUNGAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS LINGKUNGAN HIDUP']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS SOSIAL, TENAGA KERJA, DAN TRANSMIGRASI']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS KOPERASI USAHA MIKRO KECIL DAN MENENGAH']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PENANAMAN MODAL DAN PERIJINAN TERPADU SATU PINTU']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PEMUDA DAN OLAHRAGA']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'KANTOR KESATUAN BANGSA DAN POLITIK']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'KANTOR SATUAN POLISI PAMONG PRAJA']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'BADAN PENANGGULANGAN BENCANA DAERAH']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'SEKRETARIAT DAERAH']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'SEKRETARIAT DPRD']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA APARATUR']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'INSPEKTORAT']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'BADAN PENDAPATAN, PENGELOLA KEUANGAN DAN ASET DAERAH']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK MAMBERAMO HULU']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK MAMBERAMO TENGAH']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK MAMBERAMO HILIR']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK MAMBERAMO TENGAH TIMUR']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK ROUFAER']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK WAROPEN ATAS']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK SAWAI']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK BENUKI']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK IWASO']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK SIKARI']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK  KWANEHA']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK  ERAKORO']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DISTRIK SUPURI']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PEMBERDAYAAN MASYARAKAT KAMPUNG']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS KOMUNIKASI DAN INFORMATIKA']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PERTANIAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PARIWISATA DAN KEBUDAYAAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PERIKANAN']);
        UnitKerja::create(['id' => Str::uuid(),'name' => 'DINAS PERINDUSTRIAN DAN PERDAGANGAN']);
    }
}
