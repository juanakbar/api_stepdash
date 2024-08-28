<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id_layanan', 'id_user', 'id_driver', 'pickup', 'dropoff', 'status',];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'id_driver', 'id');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'order_id');
    }
}
