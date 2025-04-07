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
        Schema::create('tb_direksi', function (Blueprint $table) {
            $table->increments('id_direksi')->primary();
            $table->string('nama_lengkap', 255);
            $table->string('jabatan', 255);
            $table->string('nomor_telephone', 255);
            $table->string('keterangan', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_direksi');
    }
};
