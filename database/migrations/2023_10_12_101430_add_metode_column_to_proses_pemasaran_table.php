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
        Schema::table('proses_pemasaran', function (Blueprint $table) {
            $table->enum('metode_marketing', ['1', '2', '3'])->comment('1: push, 2: pull, 3: push & pull')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proses_pemasaran', function (Blueprint $table) {
            $table->dropColumn('metode_marketing');
        });
    }
};
