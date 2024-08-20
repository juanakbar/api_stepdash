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
        Schema::create('antar', function (Blueprint $table) {
            $table->id('id_antar');
            $table->text('lokasi');
            $table->integer('ongkir');
            $table->double('latitude', 10, 7);
            $table->double('longitude', 10, 7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antar');
    }
};