<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('penjualan', function (Blueprint $table) {
    $table->id('id_transaksi');

    $table->unsignedBigInteger('barang_id');
    $table->integer('jumlah');

    $table->timestamps();

    $table->foreign('barang_id')
          ->references('id_barang')
          ->on('barang')
          ->onDelete('cascade');
});

    }

    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
