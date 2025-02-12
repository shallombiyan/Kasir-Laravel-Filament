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
            // Mengubah kolom 'total_harga' agar mengizinkan nilai null
            // atau Anda bisa menggunakan default value, misalnya default(0)
            $table->integer('total_harga')->nullable()->change();
            // Jika ingin menggunakan default value, gunakan:
            // $table->integer('total_harga')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // Mengembalikan kolom 'total_harga' ke kondisi semula (tidak boleh null)
            $table->integer('total_harga')->nullable(false)->change();
        });
    }
};
