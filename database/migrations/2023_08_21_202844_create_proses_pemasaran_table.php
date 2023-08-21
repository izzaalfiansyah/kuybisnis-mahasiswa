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
        Schema::create('proses_pemasaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelompok_id')->unsigned();
            $table->enum('jenis', [1, 2, 3])->comment('1: offine, 2: online, 3: campuran');
            $table->text('metode')->nullable();
            $table->text('media')->nullable();
            $table->enum('jenis_laporan', ['harian', 'mingguan', 'bulanan']);
            $table->integer('modal_usaha');
            $table->integer('jumlah_produksi');
            $table->timestamps();

            $table->foreign('kelompok_id')->references('id')->on('kelompok')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proses_pemasaran');
    }
};
