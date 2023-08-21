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
        Schema::create('usaha', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelompok_id')->unsigned();
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('nama_produk');
            $table->string('legalitas_usaha');
            $table->text('manfaat');
            $table->text('segmentasi_konsumen');
            $table->text('hubungan_konsumen');
            $table->text('saluran');
            $table->text('aktifitas_utama');
            $table->text('sumberdaya_utama');
            $table->text('mitra_utama');
            $table->text('struktur_biaya');
            $table->text('arus_pendapatan');
            $table->text('foto_produk')->nullable();
            $table->timestamps();

            $table->foreign('kelompok_id')->references('id')->on('kelompok');
            $table->foreign('kategori_id')->references('id')->on('usaha_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usaha');
    }
};
