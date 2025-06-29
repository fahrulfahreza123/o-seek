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
        Schema::create('panti_asuhan_operators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operator_s_id'); // Relasi ke tabel operator_s
            $table->foreign('operator_s_id')->references('id')->on('operator_s')->onDelete('cascade');
            $table->string('nama_panti_asuhan')->nullable();
            $table->string('nama_yayasan')->nullable();
            $table->integer('jumlah_penghuni')->nullable();
            $table->text('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota_kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('no_handphone')->nullable();
            $table->string('jam_operasi')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('no_rekening', 50)->nullable(); // Nomor Rekening
            $table->string('dokumen_akte_pendirian', 255)->nullable(); // Path ke dokumen akte pendirian (PDF)
            $table->string('sk_pengesahan', 255)->nullable(); // Path ke SK Pengesahan (PDF)
            $table->string('dokumen_sosial', 255)->nullable();
            $table->string('koordinat')->nullable();;
            $table->text('link_google_map')->nullable();;
            $table->string('foto_panti_asuhan')->nullable();
            $table->string('foto_kegiatan_panti_asuhan')->nullable();
            $table->text('sejarah')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panti_asuhan_operators');
    }
};
