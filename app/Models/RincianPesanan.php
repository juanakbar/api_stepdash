<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RincianPesanan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'lokasi',
        'id_pesanan'
    ];

    protected $table = 'rincian_pesanan';

    // Relasi Mani to One dengan Pesanan
    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(Pesanan::class, 'is_pesanan');
    }
}
