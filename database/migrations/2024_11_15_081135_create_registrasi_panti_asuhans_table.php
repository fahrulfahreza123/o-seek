<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_panti_asuhans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_panti_asuhan');
            $table->string('nama_yayasan');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('akte_pendirian_panti_asuhan')->nullable();
            $table->string('surat_tanda_daftar')->nullable();
            $table->string('lembaga_kesejahteraan_sosial')->nullable();
            $table->string('sk_pengesahan_badan')->nullable();
            $table->string('hukum_yayasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi_panti_asuhans');
    }
};
