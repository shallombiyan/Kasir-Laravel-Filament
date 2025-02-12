<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // Mengubah kolom produk_id menjadi nullable
            $table->foreignId('produk_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // Kembalikan kolom produk_id menjadi tidak nullable (sesuaikan tipe dan constraint jika diperlukan)
            $table->foreignId('produk_id')->nullable(false)->change();
        });
    }
};
