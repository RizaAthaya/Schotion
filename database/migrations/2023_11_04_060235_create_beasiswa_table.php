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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->ulid('id_beasiswa')->primary();
            $table->string('nama', 255);
            $table->text('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->string('penyelenggara', 255);
            $table->string('link_gambar', 255);
            $table->char('id_kategori_beasiswa', 26)->nullable();

            $table->foreign('id_kategori_beasiswa')->references('id_kategori_beasiswa')->on('kategori_beasiswa')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswa');
    }
};
