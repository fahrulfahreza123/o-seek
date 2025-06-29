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
        Schema::create('panti_asuhans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_panti_asuhan');
            $table->string('alamat');
            $table->string('nama_yayasan');
            $table->integer('jumlah_penghuni');
            $table->string('no_handphone');
            $table->string('jam_operasional');
            $table->string('foto_panti_asuhan')->nullable();
            $table->string('koordinat');
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->text('link_maps');
            $table->text('deskripsi');
            $table->text('visi');
            $table->text('misi');
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
        Schema::dropIfExists('panti_asuhans');
    }
};
