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
        Schema::create('kelompok_anggota', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelompok_id')->unsigned();
            $table->string('nama');
            $table->string('nim');
            $table->timestamps();

            $table->foreign('kelompok_id')->on('kelompok')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok_anggota');
    }
};
