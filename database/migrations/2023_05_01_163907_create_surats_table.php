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
        Schema::create('surats', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('surat_kategori_id')->constrained()->cascadeOnDelete();
            $table->string('pengirim')->nullable();
            $table->date('tanggal')->nullable();
            $table->tinyText('nomor')->nullable();
            $table->tinyText('lampiran')->nullable();
            $table->text('perihal')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
