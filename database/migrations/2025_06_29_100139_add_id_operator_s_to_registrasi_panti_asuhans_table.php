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
        Schema::table('registrasi_panti_asuhans', function (Blueprint $table) {
            Schema::table('registrasi_panti_asuhans', function (Blueprint $table) {
                $table->unsignedBigInteger('id_operator_s')->nullable()->after('id');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrasi_panti_asuhans', function (Blueprint $table) {
            $table->dropColumn('id_operator_s');
        });
    }
};
