<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRegistrasiPantiAsuhansTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('registrasi_panti_asuhans', function (Blueprint $table) {
            //
            $table->renameColumn('surat_tanda_daftar', 'surat_tanda_daftar_lembaga_kesejahteraan_sosial')->nullable();
            $table->renameColumn('lembaga_kesejahteraan_sosial', 'sk_pengesahan_badan_hukum_yayasan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrasi_panti_asuhans', function (Blueprint $table) {
            //
            $table->renameColumn('surat_tanda_daftar_lembaga_kesejahteraan_sosial', 'surat_tanda_daftar')->nullable();
            $table->renameColumn('sk_pengesahan_badan_hukum_yayasan', 'lembaga_kesejahteraan_sosial')->nullable();
        });
    }
};
