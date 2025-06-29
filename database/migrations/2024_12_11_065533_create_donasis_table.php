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
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_donasi');
            $table->unsignedBigInteger('panti_asuhan_operators_id');
            $table->foreign('panti_asuhan_operators_id')->references('id')->on('panti_asuhan_operators')->onDelete('cascade');
            $table->unsignedBigInteger('program_donasis_id');
            $table->foreign('program_donasis_id')->references('id')->on('program_donasis')->onDelete('cascade');
            $table->string('nama_donatur')->nullable();
            $table->string('phoneNumber');
            $table->string('email')->nullable();
            $table->string('pesan')->nullable(); //pesan boleh kosong
            $table->decimal('nomDonasi', 11, 2); // 9 digit sebelum koma, 2 digit setelah koma
            $table->string('methodPayment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
