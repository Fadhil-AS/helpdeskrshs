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
        Schema::create('tb_chat', function (Blueprint $table) {
            $table->increments('id_chat')->primary();
            $table->unsignedInteger('id_pengaduan');
            $table->foreign('id_pengaduan')
                ->references('id_pengaduan')
                ->on('tb_pengaduan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('pertanyaan', 255);
            $table->string('jawaban', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chat');
    }
};
