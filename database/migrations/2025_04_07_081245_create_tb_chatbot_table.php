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
        // chatbot
        Schema::create('tb_chatbot', function (Blueprint $table) {
            $table->increments('id_chatbot')->primary();
            $table->unsignedInteger('id_chat')->nullable();
            $table->foreign('id_chat')
                ->references('id_chat')
                ->on('tb_chat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('tgl_cluster');
            $table->string('hari_cluster', 10);
            $table->string('ksm', 255);
            $table->string('poli', 255);
            $table->string('cluster', 255);
            $table->string('dokter', 255);
            $table->string('quota', 255);
            $table->string('informasi', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chatbot');
    }
};
