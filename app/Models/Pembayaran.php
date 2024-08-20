<?php

namespace App\Models;

use App\Enums\StatusPembayaran;
use App\Traits\HasStatusPembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory, HasStatusPembayaran;

    protected $fillable =
    [
        'id_pesanan',
        'status',
        'midtrans_transaction_id',
        'payment_type',
        'va_number',
        'payload',
        'total',
        'keterangan'
    ];

    protected $table = 'pembayaran';

    // Relasi Many to One dengan Pesanan
    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(Pesanan::class);
    }

    protected function casts(): array
    {
        return [
            'status' => StatusPembayaran::class,
        ];
    }
}
