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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesanan');
            $table->bigInteger('id_pelanggan');
            $table->bigInteger('id_produk');
            $table->integer('jumlah');
            $table->string('total_harga');
            $table->date('tgl_pesanan');
            $table->date('tgl_pengambilan');
            $table->string('status_pemesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
