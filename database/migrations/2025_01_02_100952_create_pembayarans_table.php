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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pesanan')->references('id')->on('pesanans')->onDelete('cascade');
            $table->timestamp('tanggal_pembayaran');
            $table->string('metode_pembayaran');
            $table->enum('status_pembayaran', ['menunggu', 'proses', 'berhasil']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
