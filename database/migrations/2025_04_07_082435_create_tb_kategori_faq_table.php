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
        // kategori faq
        Schema::create('tb_kategori_faq', function (Blueprint $table) {
            $table->increments('id_kategori_faq')->primary();
            $table->string('nama_kategori', 255);
            $table->string('deskripsi', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kategori_faq');
    }
};
