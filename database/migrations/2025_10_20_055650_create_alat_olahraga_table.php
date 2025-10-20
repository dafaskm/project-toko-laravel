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
    Schema::create('alat_olahraga', function (Blueprint $table) {
        $table->id();
        $table->string('nama_produk');
        $table->integer('stok');
        $table->integer('harga_beli');
        $table->integer('harga_jual');
        $table->timestamps(); // Ini akan membuat created_at & updated_at
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_olahraga');
    }
};
