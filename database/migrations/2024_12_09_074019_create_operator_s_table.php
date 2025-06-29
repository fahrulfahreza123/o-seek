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
        Schema::create('operator_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operator_id')->nullable(); // Kolom untuk foreign key
            $table->foreign('operator_id')->references('id')->on('operators')->onDelete('cascade'); // Foreign key ke tabel operators
            $table->string('name'); // Nama lengkap
            $table->string('email')->unique(); // Email
            $table->string('password'); // Password
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operator_s');
    }
};
