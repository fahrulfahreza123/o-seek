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
        Schema::create('program_donasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program_donasi');
            $table->date('batas_waktu');
            $table->decimal('target_donasi', 15, 2);
            $table->string('foto_panti_asuhan')->nullable();
            $table->foreignId('panti_asuhan_operators_id')->constrained('panti_asuhan_operators')->onDelete('cascade'); // Relasi ke tabel panti_asuhan_operators
            $table->foreignId('operator_s_id')->constrained('operator_s')->onDelete('cascade'); // Relasi ke tabel operator_
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_donasis');
    }
};
