<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lomba', function (Blueprint $table) {
            $table->ulid('id_lomba')->primary();
            $table->string('nama', 255);
            $table->text('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->string('penyelenggara', 255);
            $table->string('link_gambar', 255);
            $table->char('id_kategori_lomba', 26)->nullable();

            $table->foreign('id_kategori_lomba')->references('id_kategori_lomba')->on('kategori_lomba');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lomba');
    }
};
