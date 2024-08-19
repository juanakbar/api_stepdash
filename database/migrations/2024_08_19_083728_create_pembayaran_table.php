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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_pesanan');
            $table->enum('status', ['pending', 'settlement', 'deny', 'expire', 'cancel', 'refund', 'partial_refund']);
            $table->string('midtrans_transaction_id')->nullable(); // ID transaksi dari Midtrans
            $table->string('payment_type')->nullable(); // Jenis pembayaran (misalnya: credit_card, bank_transfer)
            $table->string('va_number')->nullable(); // Virtual Account Number jika metode pembayaran menggunakan bank transfer
            $table->json('payload')->nullable(); // Data respon dari Midtrans yang disimpan dalam bentuk JSON
            $table->integer('total');
            $table->string('keterangan', 255)->nullable();
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};