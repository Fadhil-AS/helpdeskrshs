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
        Schema::create('tb_unit_kerja', function (Blueprint $table) {
            $table->increments('id_unit_kerja')->primary();
            $table->unsignedInteger('id_operator_unit_kerja');
            $table->foreign('id_operator_unit_kerja')
                ->references('id_operator_unit_kerja')
                ->on('tb_operator_unit_kerja')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nama_bagian', 255);
            $table->string('status_unit_kerja', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_unit_kerja');
    }
};
