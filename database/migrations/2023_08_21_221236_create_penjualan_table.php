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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelompok_id')->unsigned();
            $table->integer('penjualan_bersih');
            $table->integer('harga_jual_produk');
            $table->integer('biaya_tetap');
            $table->integer('biaya_variabel');
            $table->integer('biaya_operasional');
            $table->integer('biaya_non_operasional');
            $table->integer('biaya_pajak');
            $table->timestamps();

            $table->foreign('kelompok_id')->references('id')->on('kelompok')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
