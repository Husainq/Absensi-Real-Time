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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama karyawan
            $table->string('username');
            $table->string('password');
            $table->enum('golongan', ['A', 'B', 'C', 'D','E']); // Golongan
            $table->enum('divisi', ['A', 'B', 'C', 'D','E']); // Divisi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
