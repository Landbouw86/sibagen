<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kpns', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->foreignId('gol_ruang_id')->constrained()->cascadeOnDelete();
            $table->date('tmt_terakhir')->nullable();
            $table->uuid('unit_kerja_id');
            $table->foreignId('kp_periode_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kp_kategori_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kpns');
    }
};
