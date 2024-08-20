<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Antar extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id_antar',
        'lokasi',
        'ongkir',
        'latitude',
        'longitude'
    ];

    protected $table = 'antar';

    // Relasi Oen to Many dengan Pesanan
    public function pesanans(): HasMany
    {
        return $this->hasMany(Pesanan::class, 'id_pesanan');
    }
}
