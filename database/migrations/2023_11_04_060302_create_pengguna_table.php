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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->ulid('id_pengguna')->primary();
            $table->string('nama_lengkap', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->char('id_peran', 26)->nullable();

            $table->foreign('id_peran')->references('id_peran')->on('peran')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
