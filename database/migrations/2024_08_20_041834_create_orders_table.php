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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->foreignId('id_layanan')->constrained('layanans', 'id_layanan');
            $table->foreignId('id_user')->constrained('users', 'id_user');
            $table->unsignedBigInteger('id_driver');
            $table->foreign('id_driver')
                    ->references('id_user')
                    ->on('users'); 
            $table->double('pickup');
            $table->double('dropoff');
            $table->enum('status', ['pending', 'accepted', 'on_the_way', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
