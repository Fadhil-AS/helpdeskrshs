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
        // pengaduan
        Schema::create('tb_pengaduan', function (Blueprint $table) {
            $table->increments('id_pengaduan')->primary();
            $table->unsignedInteger('id_unit_kerja');
            $table->foreign('id_unit_kerja')
                ->references('id_unit_kerja')
                ->on('tb_unit_kerja')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('no_medrec', 255);
            $table->string('nama_lengkap', 255);
            $table->string('email', 255);
            $table->string('nomor_telephone', 255);
            $table->string('pengaduan', 255);
            $table->string('permasalahan', 255);
            $table->string('grading', 255);
            $table->string('klarifikasi', 255);
            $table->string('file_pengaduan', 255);
            $table->string('file_evaluasi', 255);
            $table->string('status_pengaduan', 255);
            $table->date('tgl_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengaduan');
    }
};
