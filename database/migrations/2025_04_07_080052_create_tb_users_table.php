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
        // users
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('id_users')->primary();
            $table->unsignedInteger('id_direksi');
            $table->unsignedInteger('id_pengaduan');
            $table->unsignedInteger('id_unit_kerja');
            $table->unsignedInteger('id_humas');
            $table->foreign('id_direksi')
                ->references('id_direksi')
                ->on('tb_direksi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_pengaduan')
                ->references('id_pengaduan')
                ->on('tb_pengaduan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_unit_kerja')
                ->references('id_unit_kerja')
                ->on('tb_unit_kerja')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_humas')
                ->references('id_humas')
                ->on('tb_humas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
