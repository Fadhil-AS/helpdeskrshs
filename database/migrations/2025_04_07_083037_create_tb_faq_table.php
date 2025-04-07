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
        // faq
        Schema::create('tb_faq', function (Blueprint $table) {
            $table->increments('id_faq')->primary();
            $table->unsignedInteger('id_kategori_faq');
            $table->foreign('id_kategori_faq')
                ->references('id_kategori_faq')
                ->on('tb_kategori_faq')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('pertanyaan_faq', 255);
            $table->string('jawaban_faq', 255);
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_faq');
    }
};
