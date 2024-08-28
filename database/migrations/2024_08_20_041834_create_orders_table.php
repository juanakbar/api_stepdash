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
            $table->id('id');
            $table->foreignId('id_layanan')->constrained('layanans', 'id')->nullable();
            $table->foreignId('id_user')->constrained('users', 'id');
            $table->unsignedBigInteger('id_driver')->nullable();
            $table->foreign('id_driver')
                ->references('id')
                ->on('users')->nullable();
            $table->string('pickup');
            $table->string('dropoff');
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
