<?php

use App\Enums\JenisLayanan;
use App\Enums\StatusPesanan;
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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_antar')->nullable();
            $table->unsignedBigInteger('id_bengkel')->nullable();
            $table->enum('jenis_layanan', array_column(JenisLayanan::cases(), 'value'));
            $table->text('lokasi_ambil');
            $table->text('tujuan');
            $table->enum('status', array_column(StatusPesanan::cases(), 'value'));;
            $table->double('latitude', 10, 7);
            $table->double('longitude', 10, 7);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_antar')->references('id_antar')->on('antar');
            $table->foreign('id_bengkel')->references('id_bengkel')->on('bengkel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};