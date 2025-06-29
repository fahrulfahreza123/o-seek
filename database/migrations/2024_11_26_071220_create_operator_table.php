<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operator', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->date('tanggal'); // Tanggal
            $table->string('nama_operator', 255); // Nama Operator
            $table->string('nama_panti_asuhan', 255); // Nama Panti Asuhan
            $table->string('nama_yayasan', 255); // Nama Yayasan
            $table->text('alamat'); // Alamat Lengkap
            $table->string('provinsi', 100); // Provinsi
            $table->string('kota_kabupaten', 100); // Kota atau Kabupaten
            $table->string('kecamatan', 100); // Kecamatan
            $table->string('kelurahan', 100); // Kelurahan
            $table->string('no_rekening', 50); // Nomor Rekening
            $table->string('dokumen_akte_pendirian', 255); // Path ke dokumen akte pendirian (PDF)
            $table->string('sk_pengesahan', 255); // Path ke SK Pengesahan (PDF)
            $table->string('foto_panti_asuhan')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            // $table->enum('status_akun', ['active', 'inactive'])->default('inactive'); // Status Akun
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operator', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
