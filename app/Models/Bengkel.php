<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bengkel extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'latitude', 'longitude'];

    protected $table = 'bengkel';

    // Relasi One to Many dengan Bengkel
    public function bengkels(): HasMany
    {
        return $this->hasMany(Bengkel::class, 'id_bengkel');
    }
}
