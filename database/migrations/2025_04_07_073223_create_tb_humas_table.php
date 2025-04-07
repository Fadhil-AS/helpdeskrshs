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
        // humas
        Schema::create('tb_humas', function (Blueprint $table) {
            $table->increments('id_humas')->primary();
            $table->string('nama_lengkap', 255);
            $table->bigInteger('nip');
            $table->string('email', 255);
            $table->string('nomor_telephone', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_humas');
    }
};
