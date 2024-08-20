<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id_layanan',
        'id_pesanan',
        'keterangan',
        'total'
    ];

    protected $table = 'layanan';

    // Relasi Many to One dengan Pesanan
    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan');
    }
}
