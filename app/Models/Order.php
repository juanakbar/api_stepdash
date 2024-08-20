<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id_order';
    public $incrementing = true;
    protected $fillable = ['id_layanan', 'id_user', 'id_driver', 'pickup', 'dropoff', 'status'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id_layanan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'id_driver', 'id_user');
    }

    public function historyPerjalanans()
    {
        return $this->hasMany(HistoryPerjalanan::class, 'id_order', 'id_order');
    }
}
