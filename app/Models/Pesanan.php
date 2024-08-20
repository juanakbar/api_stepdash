<?php

namespace App\Models;

use App\Enums\JenisLayanan;
use App\Enums\StatusPesanan;
use App\Traits\HasJenisLayanan;
use App\Traits\HasStatusPesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesanan extends Model
{
    use HasFactory, HasStatusPesanan, HasJenisLayanan;

    protected $fillable =
    [
        'id_user',
        'id_antar',
        'id_bengkel',
        'jenis_layanan',
        'lokasi_ambil',
        'tujuan',
        'status',
        'latitude',
        'longitude'
    ];

    protected $table = ['pesanan'];

    // Relasi Many to One dengan users
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi Many to One dengan Bengkel
    public function bengkel(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_bengkel');
    }

    // Relasi One to Many dengan Layanan
    public function layanans(): HasMany
    {
        return $this->hasMany(Layanan::class, 'id_layanan');
    }

    // Relasi One to Many dengan Layanan
    public function rincian_pesanans(): HasMany
    {
        return $this->hasMany(RincianPesanan::class, 'id_rincian_pesanan');
    }

    protected function casts(): array
    {
        return [
            'status' => StatusPesanan::class,
            'jenis_layanan' => JenisLayanan::class,
        ];
    }
}