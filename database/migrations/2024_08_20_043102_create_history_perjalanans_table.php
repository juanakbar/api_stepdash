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
        Schema::create('history_perjalanans', function (Blueprint $table) {
            $table->id('id_history_perjalanan');
            $table->foreignId('id_order')->constrained('orders', 'id_order');
            $table->foreignId('pembayaran_id')->constrained('pembayarans', 'id_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_perjalanans');
    }
};
